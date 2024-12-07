var mainimg= document.querySelector('#main-img');
        
        function changeimg(imgno){
            var srcurl=mainimg.src;
            mainimg.src=document.querySelector(`#subimg${imgno}`).src;
            document.querySelector(`#subimg${imgno}`).src=srcurl;
        }
        function show(){
            document.querySelector('.box').style.display='block';
        }




        document.querySelector('#btn-frm').addEventListener("click",()=>{
            document.querySelector('#type').value='onlyframe';
            document.querySelector('#submitbtn').click();
        });


        const cbox = document.querySelectorAll(".close");
        for (let i = 0; i < cbox.length; i++) {
            cbox[i].addEventListener('click', function() {
                document.querySelector('.box').style.display='none';
            });
        }


        // document.querySelector("#btn-buy").addEventListener("click",()=>{
        //     console.log("dddd");
        //     // document.querySelector('#select-lenses').style.display='none';
        // });
        var selectpower="";
        function next(pageno){
            if(pageno==2){
                document.querySelector('#type').value="framewithglass";
                document.querySelector('.select-lenses').style.display='none';
                document.querySelector(`.select-lenses2`).style.display='flex';
            }
            else if(pageno==3){
                if(selectpower!=""){
                    document.querySelector('.select-lenses').style.display='none';
                    document.querySelector('.select-lenses2').style.display='none';
                    document.querySelector(`.select-lenses3`).style.display='flex';
                    if(selectpower=="Single Vision/Powered Eyeglasses"){
                        document.querySelector(`.select-lenses3`).innerHTML+=`
                         <div class="type-lense2" onclick="addlens(1)">
                            <img src="assets/staticimg/basic_single_low.webp" alt="zero power image">
                            <div class="detail-name2">
                                <div>
                                    <h3>Basic</h3>
                                    <h3>₹800</h3>
                                </div>
                                <p>
                                    Scratch Resistant<br>
                                    Dust & Water Resistant<br>
                                    High Clarity<br>
                                    High Durability<br>
                                </p>
                            </div>
                        </div>

                        <div class="type-lense2" onclick="addlens(2)">
                            <img src="assets/staticimg/blue_tech_single_low.webp" alt="zero power image">
                            <div class="detail-name2">
                                <div>
                                    <h3>BLUE TECH +</h3>
                                    <h3>₹1500</h3>
                                </div>
                                <p>
                                    Scratch Resistant<br>
                                    Blue Filter<br>
                                    Dust & Water Resistant<br>
                                    High Clarity<br>
                                    High Durability<br>
                                </p>
                            </div>
                        </div>
                        <button onclick="gotocart()" class="continuebtn">Continue</button>
                        `;
                    }
                    else if(selectpower=="Zero Power Eyeglasses"){
                        document.querySelector(`.select-lenses3`).innerHTML+=`
                         <div class="type-lense2" onclick="addlens(3)">
                            <img src="assets/staticimg/blue_tech_biofocal.webp" alt="zero power image">
                            <div class="detail-name2">
                                <div>
                                    <h3>Blue Filter+</h3>
                                    <h3>₹1000</h3>
                                </div>
                                <p>
                                    Scratch Resistant<br>
                                    Dust & Water Resistant<br>
                                    High Clarity<br>
                                    High Durability<br>
                                </p>
                            </div>
                        </div>
                        <button onclick="gotocart()" class="continuebtn" >Continue</button>

                        `;
                    }
                    else if(selectpower=="Bifocal/Progressive Eyeglasses"){
                        document.querySelector(`.select-lenses3`).innerHTML+=`
                         <div class="type-lense2" onclick="addlens(4)">
                            <img src="assets/staticimg/biofocal.png" alt="zero power image">
                            <div class="detail-name2">
                                <div>
                                    <h3>Neo Digi</h3>
                                    <h3>₹2000</h3>
                                </div>
                                <p>
                                    Scratch Resistant<br>
                                    UV400 Protect<br>
                                    Dust & Water Resistant<br>
                                    High Clarity<br>
                                    High Durability<br>
                                </p>
                            </div>
                        </div>

                         <div class="type-lense2" onclick="addlens(5)">
                            <img src="assets/staticimg/neo_digi.webp" alt="zero power image">
                            <div class="detail-name2">
                                <div>
                                    <h3>Neo Digi with Anti Reflect</h3>
                                    <h3>₹2500</h3>
                                </div>
                                <p>
                                    Scratch Resistant<br>
                                    Anti Reflective<br>
                                    UV400 Protect<br>
                                    Dust & Water Resistant<br>
                                    High Clarity<br>
                                    High Durability<br>
                                </p>
                            </div>
                        </div>
                        <button onclick="gotocart()" class="continuebtn" >Continue</button>
                        
                        `;
                    }
                    else{alert("Please select  type of Lens");}
                }
                else{
                    alert("Please select power type");
                }
            }
        }


         function getlense(arg){
            var type1= document.querySelector('#type1');
            var type2= document.querySelector('#type2');
            var type3= document.querySelector('#type3');
            if(arg==1){
                type1.style.backgroundColor='#fafdff';
                type1.style.borderColor='green';
                type1.style.borderWidth='3px';
                type2.style.backgroundColor='#fff';
                type2.style.borderColor='black';
                type2.style.borderWidth='2px';
                type3.style.backgroundColor='#fff';
                type3.style.borderColor='black';
                type3.style.borderWidth='2px';
                document.querySelector('#powertype').value="Single Vision/Powered Eyeglasses";
                selectpower="Single Vision/Powered Eyeglasses";
            }
            else if(arg==2){
                type2.style.backgroundColor='#fafdff';
                type2.style.borderColor='green';
                type2.style.borderWidth='3px';
                type1.style.backgroundColor='#fff';
                type1.style.borderColor='black';
                type1.style.borderWidth='2px';
                type3.style.backgroundColor='#fff';
                type3.style.borderColor='black';
                type3.style.borderWidth='2px';

                document.querySelector('#powertype').value="Zero Power Eyeglasses";
                selectpower="Zero Power Eyeglasses";
            }
            else if(arg==3){
                type3.style.backgroundColor='#fafdff';
                type3.style.borderColor='green';
                type3.style.borderWidth='3px';
                type1.style.backgroundColor='#fff';
                type1.style.borderColor='black';
                type1.style.borderWidth='2px';
                type2.style.backgroundColor='#fff';
                type2.style.borderColor='black';
                type2.style.borderWidth='2px';
                document.querySelector('#powertype').value="Bifocal/Progressive Eyeglasses";
                selectpower="Bifocal/Progressive Eyeglasses";
            }
            else{
                alert("Please select power type");
            }
        }


        function addlens(arg){
            var lenstype=document.querySelector('#lensetype');
            var lensprice=document.querySelector('#lenseprice');
            if(arg==1){
                lenstype.value="Basic";
                lensprice.value="800";
            }
            else if(arg==2){
                lenstype.value="BLUE TECH +";
                lensprice.value="1500";
            }
            else if(arg==3){
                lenstype.value="Blue Filter+";
                lensprice.value="1000";
            }
            else if(arg==4){
                lenstype.value="Neo Digi";
                lensprice.value="2000";
            }
            else if(arg==5){
                lenstype.value="Neo Digi with Anti Reflect";
                lensprice.value="2500";
            }
            else{
                alert("Please select lens type");
            }
        }


        function gotocart(){
            var lenstype=document.querySelector('#lensetype');
            var lensprice=document.querySelector('#lenseprice');
            if(lenstype.value!="null" && lensprice.value!="null"){
                document.querySelector('#submitbtn').click();
            }
            else{
                alert("Please select lens");
            }
        }


    