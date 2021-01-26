

input复选框，触发随机


触发分裂，触发随机,新版



//span  id  也可以改成随机的id

//可以创建多个


<h1>您选的前区范围码是____<span id="spanId">_____</span></h1>




//正在开发中


   <label>
 



<h1>您选的前区范围码是____<span id="spanId">_____</span></h1>

   </label>
 

   <label>
 


<h1>您选的后区范围码是____<span id="spanId2">_____</span></h1>

   </label>
 








<script>
        $(function () {
            $("input[id=abc").click(function () {
                var arr = [];
                $("input[id=abc").each(function () {
                    if(this.checked){
                        arr.push(this.value);
                    }else{
                        var index = arr.indexOf(this.value);
                        if(index != -1){
                            arr[index] = "";
                        }
                    }
                });
                
                
var  y=Math.floor(Math.random()*35+0); 

            
var  y3="+"; 

            
                
                $("#spanId").text(arr.join(",")+y3+y);
            })
        }); 
</script>
    
    
    
    
    
    
    
    
    
<script>
        $(function () {
            $("input[id=abu").click(function () {
                var arr = [];
                $("input[id=abu").each(function () {
                    if(this.checked){
                        arr.push(this.value);
                    }else{
                        var index = arr.indexOf(this.value);
                        if(index != -1){
                            arr[index] = "";
                        }
                    }
                });
                
                
var  xy=Math.floor(Math.random()*12+0); 
            
var  y2="+"; 

                $("#spanId2").text(arr.join(",")+y2+xy);
            
                
            })
        });
</script>
    
    