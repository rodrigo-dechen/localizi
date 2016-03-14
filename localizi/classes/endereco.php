<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of endereco
 *
 * @author rodrigo
 */
class endereco extends db{
    
    public function __construct(){
        parent::__construct(PREFIXO . 'enderecos_endereco');
    }
    
    public function endereco($id){
        $r = parent::select(' SELECT * FROM '. $this . ' WHERE id="'. parent::antiInjection($id). '"');
        
        if(parent::numRows($r) > 0)
            return $r[0];
        
        $r = array();
        foreach (parent::select('SHOW COLUMNS FROM '. $this) as $row){
            $r[$row['Field']] = '';
        }
        
        return $r;
    }
    
    public function criar($dados) {
        parent::insert($dados);
    }
    
    public function salvar($dados) {
        parent::update($dados, 'id = [id]');
    }
    
}
