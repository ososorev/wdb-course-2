    var save_in_bd={};
    (function (s){ 
        s.save_user=save_user;
        
            function save_user(){               
                if(validate()){                
                    event.preventDefault();
                    let form = document.querySelector("form");
                    fetch ("/colornote1/server/registr_page/registr.php", {
                        method: "POST",
                        body: new FormData(form)
                    })
                    .then (response=> {
                        return response.text();  
                    })
                    .then (text=>{
                        document.querySelector(".error").innerHTML = text;
                    });    
                      
                        
                }
            }
    
    }(save_in_bd));
            
    