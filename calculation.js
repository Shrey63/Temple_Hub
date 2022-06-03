 var x=0;
 var a=0,b=0,c=0,d=0,e=0,f=0,g=0,h=0,i=0,j=0,k=0,l=0,m=0,y=0;
 
 function amt_cal()
 {
    if (document.getElementById("havan1").checked == true ){
        a=501
        
    } 
    else
    if
    (document.getElementById("havan1").checked ==false){
        a=0;
        
    } 
    if (document.getElementById("havan2").checked == true){
        b=2100
      
    } 
    else
    if
    (document.getElementById("havan2").checked ==false){
        b=0;
        
    } 
    
    if (document.getElementById("havan3").checked == true ){
        c=1100
    } 
    else
    if
    (document.getElementById("havan3").checked ==false){
        c=0;
        
    } 
    if (document.getElementById("havan4").checked == true){
        d=11000
     
    }
    else
    if
    (document.getElementById("havan4").checked ==false){
        d=0;
        
    } 
    
    if (document.getElementById("havan5").checked == true){
        e=510000
        
     
    }
    else
    if
    (document.getElementById("havan5").checked ==false){
        e=0;
        
    } 
    
    if (document.getElementById("havan6").checked == true ){
        f=100000
     
    }
    else
    if
    (document.getElementById("havan6").checked ==false){
        f=0;
        
    } 

    if (document.getElementById("extra1").checked == true ){
        g=51
     
    }
    else 
    g=0;
    if (document.getElementById("extra2").checked == true ){
        h=101
     
    }
    else 
    h=0;
    if (document.getElementById("extra3").checked == true){
        i=301
     
    }
    else 
    i=0;
    if (document.getElementById("extra4").checked == true ){
        j=5001
        
    }
    else 
    j=0;
    if (document.getElementById("extra5").checked == true ){
        k=1501
     
    }
    else 
    k=0;
    if (document.getElementById("extra6").checked == true ){
        l=7001
     
    }
    else
    l=0
    var y=((document.getElementById("charity")).value )
    if (y!="")
    {
       m=(parseInt(y));
    }
       
    
    x=a+b+c+d+e+f+g+h+i+j+k+l+m;

    document.getElementById("price").value = x;

    
    
    
 }