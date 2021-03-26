<!DOCTYPE html>
<?php
echo Form::open();
//Nume:
echo Form::label('Nume');
echo Form::text('name1', 'Popescu');
echo "<br><br>";
//Prenume:
echo Form::label('Prenume');
echo Form::text('name2');
echo "<br><br>";
echo Form::label('Parola');
echo Form::password('password');
echo "<br><br>";
echo Form::label('Student');
echo Form::radio('nume_buton','Student', true);
echo "<br><br>";
echo Form::label('Elev');
echo Form::radio('nume_buton','Elev');
echo "<br><br>";
echo Form::label('Facultatea de Matematica');
echo Form::checkbox('nume_buton1','Matematica', true);
echo "<br><br>";
echo Form::label('Facultatea de Informatica');
echo Form::checkbox('nume_buton2','Informatica');
echo "<br><br>";
echo Form::select('size', array('L' => 'Large', 'S' => 'Small'), 'S');
echo "<br><br>";
echo Form::selectMonth('month');
echo "<br><br>";
echo Form::submit('Submit');
echo Form::reset('Reset');
echo Form::close();
?>
