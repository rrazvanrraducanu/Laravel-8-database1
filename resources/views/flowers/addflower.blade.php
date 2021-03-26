<html>
<head><title>Add a flower</title></head>
<body>
<?php    
echo Form::open(array('action' => 'FlowersController@store')) ;
echo Form::label('nume', 'Nume: ');
echo Form::text('nume');
echo $errors->first('nume')."<br/><br/>";

echo Form::label('marime', 'Marime: ');
echo Form::text('marime');
echo $errors->first('marime')."<br/><br/>";

echo Form::label('culoare', 'Culoare: '); 
echo Form::text('culoare');
echo $errors->first('culoare')."<br/><br/>";

echo Form::label('pret', 'Pret: ');
echo Form::text('pret');
echo $errors->first('pret')."<br/><br/>";

echo Form::submit('Add flower');
echo Form::close();
?>
</body>
</html>
