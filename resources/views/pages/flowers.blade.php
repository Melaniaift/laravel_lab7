@extends('pages.master')
@section('content')
<h1>Flowers data</h1>
<table>
    <tr>
        <th>Nume</th>
        <th>Marime</th>
        <th>Culoare</th>
        <th>Pret</th>
    </tr>
    @foreach($flowers1 as $flower)
    <tr>
        <th><?php echo $flower->nume;?></th>
        <th><?php echo $flower->culoare;?></th>
        <th><?php echo $flower->marime;?></th>
        <th><?php echo $flower->pret;?></th>
    </tr>
    @endforeach
</table><br/><br/>
<table>
    <tr>
         <th>Nume</th>
        <th>Marime</th>
        <th>Culoare</th>
        <th>Pret</th>
    </tr>
    @foreach($flowers2 as $flower)
    <tr>
        <th><?php echo $flower->nume;?></th>
        <th><?php echo $flower->culoare;?></th>
        <th><?php echo $flower->marime;?></th>
        <th><?php echo $flower->pret;?></th>
    </tr>
    @endforeach
</table>
