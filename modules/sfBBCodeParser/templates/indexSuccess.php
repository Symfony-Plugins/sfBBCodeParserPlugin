<h1>sfBBCodeParser demo</h1>

<table>
  <tr>
    <td cospan="3"><h2>Basic filter</h2></td>
  </tr>
  <tr>
    <td>[b]Bold[/b]</td>
    <td>:</td>
    <td><?php echo $bb_parser->qparse('[b]Bold[/b]'); ?></td>
  </tr>
  <tr>
    <td>[i]Italic[/i]</td>
    <td>:</td>
    <td><?php echo $bb_parser->qparse('[i]Italic[/i]'); ?></td>
  </tr>
  <tr>
    <td>[i]Underline[/i]</td>
    <td>:</td>
    <td><?php echo $bb_parser->qparse('[i]Underline[/i]'); ?></td>
  </tr>
  <tr>
    <td>[s]Strike[/s]</td>
    <td>:</td>
    <td><?php echo $bb_parser->qparse('[s]Strike[/s]'); ?></td>
  </tr>
  <tr>
    <td>Normal [sub]Sub[/sub]</td>
    <td>:</td>
    <td><?php echo $bb_parser->qparse('Normal [sub]Sub[/sub]'); ?></td>
  </tr>
  <tr>
    <td>Normal [sup]Sup[/sup]</td>
    <td>:</td>
    <td><?php echo $bb_parser->qparse('Normal [sup]Sup[/sup]'); ?></td>
  </tr>
  <tr>
    <hr/>
    <td cospan="3"><h2>Extended filter</h2></td>
  </tr>
  <tr>
    <td>[color="#FF7F50"]Color #FF7F50[/color]</td>
    <td>:</td>
    <td><?php echo $bb_parser->qparse('[color="#FF7F50"]Color #FF7F50[/color]'); ?></td>
  </tr>
  <tr>
    <td>[size="18"]Size 18[/size]</td>
    <td>:</td>
    <td><?php echo $bb_parser->qparse('[size="18"]Size 18[/size]'); ?></td>
  </tr>
  <tr>
    <td>[font="Tahoma"]font Tahoma[/font]</td>
    <td>:</td>
    <td><?php echo $bb_parser->qparse('[font="Tahoma"]font Tahoma[/font]'); ?></td>
  </tr>
  <tr>
    <td>[align="center"]Align center[/align]</td>
    <td>:</td>
    <td><?php echo $bb_parser->qparse('[align="center"]Align center[/align]'); ?></td>
  </tr>
  <tr>
    <td>[code]$php = "good"[/code]</td>
    <td>:</td>
    <td><?php echo $bb_parser->qparse('[code]$php = "good"[/code]'); ?></td>
  </tr>
  <tr>
    <td>[quote="COil"]This is a good plugin ! :)[/quote]</td>
    <td>:</td>
    <td><?php echo $bb_parser->qparse('[quote="COil"]This is a good plugin ! :)[/quote]'); ?></td>
  </tr>
  <tr>
    <td>[h1]Title 1[/h1]</td>
    <td>:</td>
    <td><?php echo $bb_parser->qparse('[h1]Title 1[/h1]'); ?></td>
  </tr>
  <tr>
    <td>[h2]Title 2[/h2]</td>
    <td>:</td>
    <td><?php echo $bb_parser->qparse('[h2]Title 2[/h2]'); ?></td>
  </tr>
  <tr>
    <td>[h3]Title 3[/h3]</td>
    <td>:</td>
    <td><?php echo $bb_parser->qparse('[h3]Title 3[/h3]'); ?></td>
  </tr>
  <tr>
    <td>[h4]Title 4[/h4]</td>
    <td>:</td>
    <td><?php echo $bb_parser->qparse('[h4]Title 4[/h4]'); ?></td>
  </tr>
  <tr>
    <td>[h5]Title 5[/h5]</td>
    <td>:</td>
    <td><?php echo $bb_parser->qparse('[h5]Title 5[/h5]'); ?></td>
  </tr>  
  <tr>
    <td>[h6]Title 6[/h6]</td>
    <td>:</td>
    <td><?php echo $bb_parser->qparse('[h6]Title 6[/h6]'); ?></td>
  </tr>  
</table>