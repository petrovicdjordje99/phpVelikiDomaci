<?php

interface IProducts{
    function insertGrad($ImeGrada,$Cena,$DrzavaID);
    function updateGrad($id,$ime,$cena,$DrzavaID);
    function deleteGrad($id);
}