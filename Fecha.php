<?php
namespace servicesapp\air;

/*==============================================================================================================================
 * @access public
 * @author Humberto Santos
 * @version 1.1.x-dev
==============================================================================================================================*/
interface Fecha
{
    /*==============================================================================================================================
    * Funcion para inicializar que debe usar un formato dependiendo el pais la Fecha
    ==============================================================================================================================*/
    public function formato();

} 

?>