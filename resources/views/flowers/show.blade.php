<!DOCTYPE html>
<html>
    <head><title>Flowers</title></head>
<h1>Flowers data</h1>
    @if (count($flowers)==0)
    Nu sunt inregistrari in db!
    @else
<table>
    <tr>
    <th>Nume</th>
    <th>Marime</th>
    <th>Culoare</th>
    <th>Pret</th>
    <th>Actions</th>
    </tr>
 @foreach($flowers as $flower)
 <tr>
     <td><?php echo $flower->nume;?></td>
     <td><?php echo $flower->culoare;?></td>
     <td><?php echo $flower->marime;?></td>
     <td><?php echo $flower->pret;?></td>
     <td><?php echo link_to("/{$flower->nume}", 'View');?>
         <?php echo link_to("/edit/{$flower->nume}", 'Edit');?>
         <?php echo link_to("/delete/{$flower->nume}", 'Delete');?>
     </td>
 </tr>
 @endforeach
</table>
    @endif
    <?php echo link_to("/add", 'Add a record')."<br/><br/>";?>

@if(Session::has('message'))
    <?php echo Session::get('message');?>
@endif
</html>
