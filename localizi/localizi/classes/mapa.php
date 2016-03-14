<?php
/**
 * Description of mapa
 *
 * @author rodrigo
 */

class mapa extends db{

    public function __construct() {
        parent::__construct(PREFIXO . 'enderecos_mapa');
    }
    
    public function mapa($id) {
        $r = parent::select('SELECT * FROM '. $this. ' WHERE id="'. parent::antiInjection($id). '"');
        
        if(parent::numRows($r) > 0)
            return $r[0];
        
        $r = array();
        foreach (parent::select('SHOW COLUMNS FROM '. $this) as $row){
            $r[$row['Field']] = '';
        }
        
        return $r;
    }

    public function criar($dados){
        $dados['id_dinamico'] = $this->livre_dimanico_id($dados['nome']);
        parent::insert($dados);
    }

    public function salvar($dados){
        parent::update($dados, 'id = "[id]"');
    }
    
    private function livre_dimanico_id($id_dinamico){
        
        $id_dinamico = str_replace(' ', '-', strtolower($id_dinamico));
        
        $r = parent::select('
            SELECT 

                m1.id, m1.nome, m1.id_dinamico, (

                    SELECT 
                        m2.id_dinamico 

                    FROM 
                        '. $this. ' m2 

                    WHERE 
                        m2.id_dinamico > m1.id_dinamico 

                    ORDER BY 
                        m2.id_dinamico 

                    ASC LIMIT 1

                ) as id_dinamico_proximo

            FROM(

                (
                    SELECT 
                        0 as id, "'. $id_dinamico. '" as nome, "'. $id_dinamico. '" as id_dinamico
                )

                UNION

                (
                    SELECT 
                        m3.id, m3.nome, m3.id_dinamico

                    FROM 
                        '. $this. ' m3
                )

            )m1
		
            ORDER BY
                m1.id_dinamico asc
        ');
        
        $t = parent::numRows($r);
        
        if($t == 1)
            return $id_dinamico;
                
        if($t == 2 && $r[1]['id_dinamico_proximo'] === NULL)
            return $id_dinamico. '-2';
        
        if($t >= 2)
            for($i = 0; $i < $t; $i++)
                if($r[$i]['id_dinamico_proximo'] !== ($novo = $id_dinamico. ($i >= 1? '-'. ($i + 1): '')))
                    return $novo;
         
    }

}
