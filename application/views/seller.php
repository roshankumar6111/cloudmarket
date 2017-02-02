<html>
 <head>
    
    
</head>
    <body>
           <?php echo form_open('Cloudmarketlogin/login',['class'=>'form-horizontal']);?>
          <?php echo form_error('email');?>
             <?php 
                  
          
          echo form_input(['name'=>'email','type'=>'text','placeholder'=>'Email','class'=>'form-control','value'=>set_value('email')]);?>
         <?php echo form_error('password');?>
             <?php 
                    echo form_input(['name'=>'password','type'=>'password','placeholder'=>'Password','class'=>'form-control']);?>
          <?php echo form_submit('submit','Login',['class'=>'btn btn-primary']);?>
           
          <?php echo form_close()?>
          
    </body>

</html>