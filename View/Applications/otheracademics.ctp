<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<html>
<head>
<title>Choose the Courses </title>
</head>
<body bgcolor="skyblue">
<table width="100%">
<tr>
<td colspan="2"> <img src="logo1.jpg" width="5%">
</td>

</tr>

<tr>

<td bgcolor="white" height="80%" width="15%" valign="top">
 <p>

<?php
 print $this->Html->link('Personal Details', array('controller'=>'Applications', 'action'=> 'personalbiodata'));

 ?>
 </p>
  <p>
 <?php
 print $this->Html->link('Personal Adress', array('controller'=>'Applications', 'action'=> 'addresses'));

 ?>
  </p>
  <p><?php
 print $this->Html->link('Choose course', array('controller'=>'Applications', 'action'=> 'Courses'));

 ?></p>
   <p><?php
 print $this->Html->link('Academic History:UACE', array('controller'=>'Applications', 'action'=> 'uace'));

 ?></p>
  <p><?php
 print $this->Html->link('Academic History:UCE', array('controller'=>'Applications', 'action'=> 'uce'));

 ?>
 </p>
 <p>
 <?php
 print $this->Html->link('Other Academics:', array('controller'=>'Applications', 'action'=> 'otheracademics'));

 ?></p>
  <p><?php
 print $this->Html->link('Employee History', array('controller'=>'Applications', 'action'=> 'employeehistory'));

 ?>
      </p>

  <p><?php
 print $this->Html->link('References', array('controller'=>'Applications', 'action'=> 'references'));

 ?></p>
  <p><?php
 print $this->Html->link('English competency', array('controller'=>'Applications', 'action'=> 'englishlanguage'));

 ?></p>
  <p><?php
 print $this->Html->link('Feedback', array('controller'=>'Applications', 'action'=> 'feedback'));

 ?>
       </p></td>

<td>
<form name="content">
    <h3>Other Academic Qualifications</h3><br><br>

<table>
    <tr></th><th>upload</th>
        <th>university/<br/>college/institution<br/>(include address<br/> and country) </th>
        <th>qualifications obtained</th><th>date obtained</th>
        <th>full time/part time/<br/>distances</th>
        <th>upload</th>
     <?php 
      for($i=0; $i<4; $i++){
      echo "<tr> <td>".$this->form->input('employe_name',array('label'=>false))."</td><td>";
      echo $this->form->input('university/<br/>college/institution<br/>(include address<br/> and country',array('label'=>false))."</td><td>";
      echo $this->form->input('qualifications obtained',array('label'=>false))."</td><td>";
      echo $this->form->input('date obtained',array('label'=>false))."</td><td>";
      echo $this->form->input('full time/part time/<br/>distances',array('label'=>false))."</td><td>";
      echo $this->form->input('upload',array('label'=>false))."</td></tr>";
      }  
      ?>


</table><?php echo "<h3>Profesional Qualification</h3>";?>
    <table>
        <tr>
            <th>
               Qualification 
            </th>
             <th>
                Date Obtained
            </th>
             <th>
                Upload
            </th>
        </tr> 
        <tr>
             <?php 
      for($i=0; $i<3; $i++){
      echo "<tr> <td>".$this->form->input('employe_name',array('label'=>false))."</td><td>";
      echo $this->form->input('employe_name',array('label'=>false))."</td><td>";
      echo $this->form->input('employe_name',array('label'=>false))."</td></tr>";
       }  
      ?>
        </tr>
    </table>

</form>





</td>
</tr>

<tr>

<td align="left">

<input type="submit" value="<<Back" onclick="location.href='uce'">
</td>

<td></td>

<td align="right" colspan="2">

<input type="submit" value="Next>>" onclick="location.href='employeehistory'">



</td>
</tr>
</table>
</body>
</html>