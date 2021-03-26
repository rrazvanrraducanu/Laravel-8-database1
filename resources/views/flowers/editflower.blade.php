<!DOCTYPE html>
<html>
    <head><title>Update flower</title></head>
    <body>
        <h1>Update a flower</h1>
<?php
echo Form::model($flower, array('url' => 'updateData/'.$flower->nume));

echo Form::label('nume', 'Nume:');
echo Form::text('nume')."<br/><br/>";
echo Form::label('culoare', 'Culoare: ');
echo Form::text('culoare')."<br/><br/>";
echo Form::label('marime', 'Marime: ');
echo Form::text('marime')."<br/><br/>";
echo Form::label('pret', 'Pret: ');
echo Form::text('pret')."<br/><br/>";
echo Form::submit('Update flower');
echo Form::close();
?>
    </body>
</html>
