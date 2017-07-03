<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<br>
<br>
<br>
<br>
<br>
<br>
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/estilos2.css">

    
<div class="container">

    <div class="caja">

        <div class="registro">

            <?= form_open('/Registro/recibirDatos') ?>
            <div class="formulario">

                <h1 align="center">Registrate</h1>
                <hr>

                <?
                $nombre = array(
                'name' => 'nombre',
                'placeholder' => 'Escribe tu nombre',
                'class' => 'form-control'
                );

                $usuario = array(
                'name' => 'usuario',
                'placeholder' => 'Escribe tu usuario',
                'type' => 'text',
                'class' => 'form-control'
                );
                $password = array(
                'name' => 'password',
                'placeholder' => 'Escribe tu contraseña',
                'type' => 'password',
                'class' => 'form-control'
                );
                $email = array(
                'name' => 'email',
                'placeholder' => 'Escribe tu email',
                'type' => 'email',
                'class' => 'form-control'
                );
                $telefono = array(
                'name' => 'telefono',
                'placeholder' => 'Escribe tu telefono',
                'type' => 'text',
                'class' => 'form-control'

                );

                $atributos = array (
                'class' => 'col-sm-2 col-form-label'
                ); 




                ?>

                <div class="form-group row">
                    <?= form_label('Nombre', 'nombre', $atributos) ?>
                    <div class="col-sm-10">
                        <?= form_input($nombre) ?>
                    </div>
                </div>
                <div class='form-group row'>
                    <?= form_label('Usuario', 'usuario', $atributos) ?>
                    <div class="col-sm-10">
                        <?= form_input($usuario) ?>
                    </div>
                </div>
                <div class='form-group row'>
                    <?= form_label('Password', 'password', $atributos) ?>
                    <div class="col-sm-10">
                        <?= form_input($password) ?>
                    </div>
                </div>
                <div class='form-group row'>
                    <?= form_label('Email', 'inputPassword3', $atributos) ?>
                    <div class="col-sm-10">
                        <?= form_input($email) ?>
                    </div>
                </div>
                <div class='form-group row'>
                    <?= form_label('Telefono', 'telefono', $atributos) ?>
                    <div class="col-sm-10">
                        <?= form_input($telefono) ?>
                    </div>
                </div>
                
                
                <button type="submit" class="btn btn-primary">Sign in</button>



            </div>


        </div>



    </div>


</div>
        <br>
                <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>









