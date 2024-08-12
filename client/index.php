<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link rel="stylesheet" href="/../styles/client_styles.css">
    <link rel="stylesheet" href="/../styles/main_styles.css">
    <link rel="stylesheet" href="/../styles/style.css">
    <script src="../scripts/client_script.js" defer></script>
    <script src="../scripts/serviceFunction.js" ></script>
    
</head>
<body>
    <?php /*$page = 'home'; include '../partial/header.php';*/?>
    <?php $page = 'services'; include '../partial/header.php';?>
    <br>
	<img src="_images\logo.png" id="shortlisted" onclick="myController.showPop(1)">

    <div id="serviceList">

    <div id='noticeBox' class='notice'>
        <p id='externalMsg'class='noticeMessage'></p>
    </div>

    <h3 class='serviceCategories'>Eyebrows</h3>

    <table class=serviceTable>
        <tr>
            <td class='gridBlockImage'>
                <img src="../_images/1.jpg" width="150" height="150" class='gridImage' onclick="myController.showPop(1)">            
                <table class='labelTable'>
                    <tr >
                        <td class='labelTableCell'><p id="sDetails" class='serviceLabel' ><p id="sDetails" class='serviceLabel'>Classic</p><p class='price'> R400.00</p></p></td class='gridBlock'></td>
                        <td class='labelTableCellAdd'>
                            <div class='addButton' onclick='myController.bookService(1, false)'>+</div>
                        </td>
                    </tr>
                </table>
            </td>
            
            <td class='gridBlockImage'>
                <img src="../_images\2.jpg" width="150" height="150" class='gridImage' onclick="myController.showPop(2)">            
                <table class='labelTable'>
                    <tr >
                        <td class='labelTableCell'><p id="sDetails" class='serviceLabel' ><p id="sDetails" class='serviceLabel'>Hybrid</p><p class='price'> R500.00</p></p></td class='gridBlock'></td>
                        <td class='labelTableCellAdd'>
                            <div class='addButton' onclick='myController.bookService(2,false)'>+</div>
                        </td>
                    </tr>
                </table>
            </td>

            <td class='gridBlockImage'>
                <img src="../_images\3.jpg" width="150" height="150" class='gridImage' onclick="myController.showPop(3)">            
                <table class='labelTable'>
                    <tr >
                        <td class='labelTableCell'><p id="sDetails" class='serviceLabel' ><p id="sDetails" class='serviceLabel'>Strip Las</p><p class='price'> R450.00</p></p></td class='gridBlock'></td>
                        <td class='labelTableCellAdd'><div class='addButton' onclick='myController.bookService(3, false)'>+</div></td>
                    </tr>
                </table>
            </td>


            <td class='gridBlockImage'>
                <img src="../_images\20.png" width="150" height="150" class='gridImage' onclick="myController.showPop(4)">            
                <table class='labelTable'>
                    <tr >
                        <td class='labelTableCell'><p id="sDetails" class='serviceLabel' ><p id="sDetails" class='serviceLabel'>Volume</p><p class='price'> R600.00</p></p></td class='gridBlock'></td>
                        <td class='labelTableCellAdd'><div class='addButton' onclick='myController.bookService(4, false)'>+</div></td>
                    </tr>
                </table>
            </td>

            <td class='gridBlockImage'>
                <img src="../_images\21.jpg" width="150" height="150" class='gridImage' onclick="myController.showPop(5)">            
                <table class='labelTable'>
                    <tr >
                        <td class='labelTableCell'><p id="sDetails" class='serviceLabel' ><p id="sDetails" class='serviceLabel'>Mega Vol</p><p class='price'> R800.00</p></p></td class='gridBlock'></td>
                        <td class='labelTableCellAdd'><div class='addButton' onclick='myController.bookService(5, false)'>+</div></td>
                    </tr>
                </table>
            </td>


        
            </td class='gridBlock'>
        </tr>
       
    </table>

    
    <br>

    <h3 class='serviceCategories'>Nails</h3>
    <table class=serviceTable>
        <tr>
            <td class='gridBlockImage'>
                <img src="../_images\4.png" width="150" height="150" class='gridImage' onclick="myController.showPop(6)">            
                <table class='labelTable'>
                    <tr >
                        <td class='labelTableCell'>
                            <p id="sDetails" class='serviceLabel' >
                                <p id="sDetails" class='serviceLabel'>Nail Art</p>
                                <p class='price'> R30.00</p>
                            </p>
                            
                        </td>
                        <td class='labelTableCellAdd'><div class='addButton' onclick='myController.bookService(6, false)'>+</div></td>
                    </tr>
                </table>
            </td>
            
            <td class='gridBlockImage'>
                <img src="../_images\5.png" width="150" height="150" class='gridImage' onclick="myController.showPop(7)">            
                <table class='labelTable'>
                    <tr >
                        <td class='labelTableCell'><p id="sDetails" class='serviceLabel' ><p id="sDetails" class='serviceLabel'>Acrylic</p><p class='price'> R420.00</p></p></td class='gridBlock'></td>
                        <td class='labelTableCellAdd'><div class='addButton' onclick='myController.bookService(7, false)'>+</div></td>
                    </tr>
                </table>
            </td>

            <td class='gridBlockImage'>
                <img src="../_images\6.png" width="150" height="150" class='gridImage' onclick="myController.showPop(8)">            
                <table class='labelTable'>
                    <tr >
                        <td class='labelTableCell'><p id="sDetails" class='serviceLabel' ><p id="sDetails" class='serviceLabel'>Gel</p><p class='price'> R370.00</p></p></td class='gridBlock'></td>
                        <td class='labelTableCellAdd'><div class='addButton' onclick='myController.bookService(8, false)'>+</div></td>
                    </tr>
                </table>
            </td>


            <td class='gridBlockImage'>
                <img src="../_images\14.png" width="150" height="150" class='gridImage' onclick="myController.showPop(9)">            
                <table class='labelTable'>
                    <tr >
                        <td class='labelTableCell'><p id="sDetails" class='serviceLabel' ><p id="sDetails" class='serviceLabel'>Silk</p><p class='price'> R390.00</p></p></td class='gridBlock'></td>
                        <td class='labelTableCellAdd'><div class='addButton' onclick='myController.bookService(9, false)'>+</div></td>
                    </tr>
                </table>
            </td>

            <td class='gridBlockImage'>
                <img src="../_images\16.png" width="150" height="150" class='gridImage' onclick="myController.showPop(10)">            
                <table class='labelTable'>
                    <tr >
                        <td class='labelTableCell'><p id="sDetails" class='serviceLabel' ><p id="sDetails" class='serviceLabel'>Soak off</p><p class='price'> R130.00</p></p></td class='gridBlock'></td>
                        <td class='labelTableCellAdd'><div class='addButton' onclick='myController.bookService(10, false)'>+</div></td>
                    </tr>
                </table>
            </td>


        
            </td class='gridBlock'>
        </tr>
       
    </table>
    
    <h3 class='serviceCategories'>Hair</h3>
    <table class=serviceTable>
        <tr>
            <td class='gridBlockImage'>
                <img src="../_images\17.png" width="150" height="150" class='gridImage' onclick="myController.showPop(11)">            
                <table class='labelTable'>
                    <tr >
                        <td class='labelTableCell'><p id="sDetails" class='serviceLabel' ><p id="sDetails" class='serviceLabel'>Knotless</p><p class='price'> R850.00</p></p></td class='gridBlock'></td>
                        <td class='labelTableCellAdd'><div class='addButton' onclick='myController.bookService(1, false)'>+</div></td>
                    </tr>
                </table>
            </td>
            
            <td class='gridBlockImage'>
                <img src="../_images\19.png" width="150" height="150" class='gridImage' onclick="myController.showPop(12)">            
                <table class='labelTable'>
                    <tr >
                        <td class='labelTableCell'><p id="sDetails" class='serviceLabel' ><p id="sDetails" class='serviceLabel'>Small</p><p class='price'> R900.00</p></p></td class='gridBlock'></td>
                        <td class='labelTableCellAdd'><div class='addButton' onclick='myController.bookService(1, false)'>+</div></td>
                    </tr>
                </table>
            </td>

            <td class='gridBlockImage'>
                <img src="../_images\18.png" width="150" height="150" class='gridImage' onclick="myController.showPop(13)">            
                <table class='labelTable'>
                    <tr >
                        <td class='labelTableCell'><p id="sDetails" class='serviceLabel' ><p id="sDetails" class='serviceLabel'>Medium</p><p class='price'> R800.00</p></p></td class='gridBlock'></td>
                        <td class='labelTableCellAdd'><div class='addButton' onclick='myController.bookService(1, false)'>+</div></td>
                    </tr>
                </table>
            </td>


            <td class='gridBlockImage'>
                <img src="../_images\7.png" width="150" height="150" class='gridImage' onclick="myController.showPop(14)">            
                <table class='labelTable'>
                    <tr >
                        <td class='labelTableCell'><p id="sDetails" class='serviceLabel' ><p id="sDetails" class='serviceLabel'>Large</p><p class='price'> R750.00</p></p></td class='gridBlock'></td>
                        <td class='labelTableCellAdd'><div class='addButton' onclick='myController.bookService(1, false)'>+</div></td>
                    </tr>
                </table>
            </td>

            <td class='gridBlockImage'>
                <img src="../_images\8.png" width="150" height="150" class='gridImage' onclick="myController.showPop(15)">            
                <table class='labelTable'>
                    <tr >
                        <td class='labelTableCell'><p id="sDetails" class='serviceLabel' ><p id="sDetails" class='serviceLabel'>Thick</p><p class='price'> R700.00</p></p></td class='gridBlock'></td>
                        <td class='labelTableCellAdd'><div class='addButton' onclick='myController.bookService(1, false)'>+</div></td>
                    </tr>
                </table>
            </td>


        
            </td class='gridBlock'>
        </tr>
       
    </table>

    <h3 class='serviceCategories'>Waxing</h3>
    <table class=serviceTable>
        <tr>
            <td class='gridBlockImage'>
                <img src="../_images\23.jpeg" width="150" height="150" class='gridImage' onclick="myController.showPop(16)">            
                <table class='labelTable'>
                    <tr >
                        <td class='labelTableCell'><p id="sDetails" class='serviceLabel' ><p id="sDetails" class='serviceLabel'>Full Body</p><p class='price'> R110.00</p></p></td class='gridBlock'></td>
                        <td class='labelTableCellAdd'><div class='addButton' onclick='myController.bookService(1, false)'>+</div></td>
                    </tr>
                </table>
            </td>
            
            <td class='gridBlockImage'>
                <img src="../_images\24.jpeg" width="150" height="150" class='gridImage' onclick="myController.showPop(17)">            
                <table class='labelTable'>
                    <tr >
                        <td class='labelTableCell'><p id="sDetails" class='serviceLabel' ><p id="sDetails" class='serviceLabel'>Underarms</p><p class='price'> R120.00</p></p></td class='gridBlock'></td>
                        <td class='labelTableCellAdd'><div class='addButton' onclick='myController.bookService(1, false)'>+</div></td>
                    </tr>
                </table>
            </td>

            <td class='gridBlockImage'>
                <img src="../_images\12.jpg" width="150" height="150" class='gridImage' onclick="myController.showPop(18)">            
                <table class='labelTable'>
                    <tr >
                        <td class='labelTableCell'><p id="sDetails" class='serviceLabel' ><p id="sDetails" class='serviceLabel'>Bikini</p><p class='price'> R160.00</p></p></td class='gridBlock'></td>
                        <td class='labelTableCellAdd'><div class='addButton' onclick='myController.bookService(1, false)'>+</div></td>
                    </tr>
                </table>
            </td>


            <td class='gridBlockImage'>
                <img src="../_images\10.jpg" width="150" height="150" class='gridImage' onclick="myController.showPop(19)">            
                <table class='labelTable'>
                    <tr >
                        <td class='labelTableCell'><p id="sDetails" class='serviceLabel' ><p id="sDetails" class='serviceLabel'>Brazilian</p><p class='price'> R335.00</p></p></td class='gridBlock'></td>
                        <td class='labelTableCellAdd'><div class='addButton' onclick='myController.bookService(1, false)'>+</div></td>
                    </tr>
                </table>
            </td>

            <td class='gridBlockImage'>
                <img src="../_images\11.jpg" width="150" height="150" class='gridImage' onclick="myController.showPop(20)">            
                <table class='labelTable'>
                    <tr >
                        <td class='labelTableCell'><p id="sDetails" class='serviceLabel' ><p id="sDetails" class='serviceLabel'>Face</p><p class='price'> R225.00</p></p></td class='gridBlock'></td>
                        <td class='labelTableCellAdd'><div class='addButton' onclick='myController.bookService(1, false)'>+</div></td>
                    </tr>
                </table>
            </td>


        
            </td class='gridBlock'>
        </tr>
       
    </table>
    <br>
    <br>
    <br>
</div>
    
<div id="popupBack" class="popupBackground"><!--popup background-->

<div class="popupBlock"  ><!--popup block-->
    
    <div class="contentblock">
    <h2 id='serviceName' class='headingCol'>heading</h2>
    <p id='description' class='tableHeading'>This will be the description of the service selected by a user</p>
        <table class='dialogServicesInfo'>
            
            <tr class='detailsRow'>
                <td class='dialogServiceCell'>
                    <img id='thumbnailDialog' class='dialogThumbnail' src="../_images\10.jpg" >
                </td>
                <td class='dialogDescriptionCell'>
                    
                    <table class ='dialogInfoTable'>
                        
                        <tr>
                            <td class='serviceDetailCellH'>Price</td>
                            <td class='serviceDetailCellH'>Duration</td>
                            <td class='serviceDetailCellH' >Stylistd</td>
                            
                        </tr>
                        
                        <tr>
                            <td id='price' class='serviceDetailCell'>R 100.00</td>
                            <td id='duration' class='serviceDetailCell'>2 hrs</td>

                            
                                            <td id='Stylist1' class='serviceDetailCellH'>
                                                <select class='StylistSelector'>
                                                    <option>Dion</option>
                                                    <option>Mpho</option>
                                                    <option>Vusi</option>
                                                </select>
                                            </td>
                                        </tr>
                        </tr>
                    </table>
                </td>
                <td class='headingCol'>
                
                            
                        
                    
                </td>
            </tr>
        </table>

                    <table class='mainStylistTable'>
                            <tr>
                                
                                <td>
                                    <table id='dialogStylistTable2' class='dialogStylistTable' onclick='myController.markStylist(2)'>
                                        <tr>
                                            <td class='DayPickCell'>
                                                <select id='daySelectorf' class='TimeSelection' onchange="myController.updateUnits(this.value,'day')">
                                                    <option value=1>1</option>
                                                    <option value=2>2</option>
                                                    <option value=3>3</option>
                                                </select>   
                                            </td>  
                                        </tr>
                                        <tr>
                                            <td id='Stylist2' class='dialogStylistCell'>Day</td>
                                        </tr>
                                    </table>
                                </td>
                                <td>
                                    <table id='dialogStylistTable3' class='dialogStylistTable' onclick='myController.markStylist(3)'>
                                        <tr>
                                            <td class='MonthPickCell'>
                                            <select class='TimeSelection'>
                                                    <option>JAN</option>
                                                    <option>FEB</option>
                                                    <option>MAR</option>
                                                    
                                                </select>   
                                            </td>   
                                        </tr>
                                        <tr>
                                            <td id='Stylist3' class='dialogStylistCell'>Month</td>
                                        </tr>
                                    </table>
                                </td>

                                <td>
                                    <table  class='dialogStylistTable' >
                                        <tr>
                                            <td class='TimePickCell'>
                                            <select class='TimeSelection'>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                </select>
                                                hr:
                                                <select class='TimeSelection'>
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                </select>  
                                                mm
                                            </td>   
                                        </tr>
                                        <tr>
                                            <td id='Stylist4' class='dialogStylistCell'>Time</td> 
                                        </tr>
                                    </table>
                                </td>

                                <td>
                                    <table id='dialogStylistTable4' class='dialogStylistTable' onclick='myController.markStylist(4)'>
                                        <tr>
                                            <td class='MonthPickCell'>
                                                <select class='TimeSelection'>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                </select>   
                                            </td>   
                                        </tr>
                                        <tr>
                                            <td id='Stylist4' class='dialogStylistCell'>Sessions</td> 
                                        </tr>
                                    </table>
                                </td>

                                
                                
                                
                            
                               
                                   
                            </tr>
                    </table>
                    <p id='internalMsg' class='tableHeading'>.</p>
    

        <button id='buttonBook' class="bookButton" onclick='myController.bookService(1, true)'>Book</button>

        <button id='closePopup' class="closePopup" >Close</button>

    </div>

<table id='lastButtons'>
    <tr>
        <td>
        </td>
            
        <td>
        
        </td>
    </tr>
</table>

</div>

</div>
    
    <script>

        class controller2 //services' page
        {
            sessionNewValue=0;
            service1=['../_images/1.jpg','Classic','R400.00','0','1 hour', 'a description of service'];
            service2=['../_images/2.jpg','Hybrid','R400.00','0','2 hours', 'b description of service'];
            service3=['../_images/3.jpg','Strip Lash','R450.00','0','1.5 hours', 'c description of service which may be long or short, it will depend on the service at hand'];
            service4=['../_images/20.png','Volume','R600.00','0','2 hours', 'd description of service'];
            service5=['../_images/21.jpg ','Mega Volume','R800.00','0','1.5 hour', 'e description of service'];
            service6=['../_images/4.png','Nail Art','R30.00','0','2 hours', 'f description of service'];
            service7=['../_images/5.png','Acrylic','R420.00','0','2 hour', 'g description of service'];
            service8=['../_images/6.png','Gel','R370.00','0','1.5 hour', 'h description of service'];
            service9=['../_images/14.png','Silk','R390.00','0','1 hour', 'i description of service'];
            service10=['../_images/16.png','Soak Off','R130.00','0','2 hours', 'j description of service'];
            services=[this.service1, this.service2, this.service3, this.service4, this.service5,
                      this.service6, this.service7, this.service8, this.service9, this.service10];
            stylistState=[0,0,0,0,0,0];    
            serviceNumber=0;
        
            showPop(service)
            {
                    this.serviceNumber=service-1;
                    var thumbnail=document.getElementById('thumbnailDialog');
                    var serviceName=document.getElementById('serviceName');
                    var description=document.getElementById('description');
                    var price=document.getElementById('price');
                    var duration =document.getElementById('duration');

                    thumbnail.setAttribute('src', this.services[service-1][0]);
                    serviceName.textContent=this.services[service-1][1];
                    description.textContent=this.services[service-1][5];
                    price.textContent=this.services[service-1][2];
                    duration.textContent=this.services[service-1][4];

//                    unitIncrement.setAttribute('onclick',"myController.changeSessions(true, 1)");
  //                  unitDecrement.setAttribute('onclick',"myController.changeSessions(false, 1)");
                    
                    var stylist=1;
                    var stylistTables=[null,dialogStylistTable2,dialogStylistTable3,
                    dialogStylistTable4];
                    
                    for(stylist=1;stylist<stylistTables.length;stylist++)
                    {
                        stylistTables[stylist].setAttribute('onclick', 'myController.markStylist('+stylist+','+service+')');
                    }

                    buttonBook.setAttribute('onclick','myController.bookService('+service+',true)');

                popupBack.classList.add("show");

            }

            activeService='make-up';
            stylist='Vusi';
            day=2;
            month=3;
            hour=2;
            min=3;
            sessions=2;

            updateUnits(option,unit)
            {
                //set the service
                
                this.activeService=this.services[this.serviceNumber][1];

                switch(unit)
                {
                    
                    case 'stylist':
                        this.stylist=option;
                        break;
                    
                    case 'day':
                        this.day=option;
                        break;
                    case 'month':

                    //convert to numerical values
                        this.month=7;
                        break;
                    case 'hour':
                        this.hour=option;
                        break;
                    
                    case 'min':
                        this.min=option;
                        break;
                    case 'sessions':
                        this.session=option;
                        break;
   
                }

                //
            }

        //get service from popup
           bookService(service, inDialog)
            {

                 var serviceOneData;
                var bookingNumber=sessionStorage.length+1;
                var sessionsNeeded=this.sessionNewValue;

                var internalMsg =document.getElementById('internalMsg');
                var externalMsg=document.getElementById('externalMsg');
                var noticeBox=document.getElementById('noticeBox');
                
                var requestor = new XMLHttpRequest();
                
                if(inDialog)
                {
                    //if, these codes for in and out of dialog
                
                   // var dayfound=document.getElementById('daySelectorf').value;
                   requestor.open("GET",'/scripts/logBookings.php?log='+service
                    +"&service="+this.activeService
                    +"&stylist="+this.stylist+"&day="+this.day+"&month="+this.month
                    +"&hour="+this.hour+"&min="+this.min+"&sessions="+this.sessions                    
                    ,true);
                   requestor.send();

                    internalMsg.textContent='Service Booked Successfully!';    


                    setTimeout(function()
                    {
                        internalMsg.textContent='.'
                    }
                    ,2500);
                }else //if(!inDialog)
                {
                    requestor.open("GET",'/scripts/logBookings.php?log='+service+"&day="+1,true);
                    requestor.send();

                    externalMsg.textContent='Service Booked Successfully!';
                    externalMsg.style.color='black';
                    noticeBox.style.backgroundColor='white';

                    setTimeout(function()
                    {
                        externalMsg.textContent='.';
                        externalMsg.style.backgroundColor='#ffffff00';
                        noticeBox.style.backgroundColor='#ffffff00';
                    }
                    ,2500);
                }

            }
            
            removePop()
            {
                this.activeService=0;
                popupBack.classList.remove("show");

                this.sessionNewValue=1;
                //sessionValue.textContent=this.sessionNewValue;
                //this.restoreStylistsStates();
            }

            removeByBackground()
            {
                if (event.target == popupBack) 
                {
                    popupBack.classList.remove("show");
                }

            }

            
            changeSessions(toPositive,service)
            {                        
                var sessionValue=document.getElementById('sessionValue');                
                var sessionValuefinal=parseInt(sessionValue.innerText);
                    
                        if(!toPositive)
                        {    
                            if(sessionValuefinal>1)
                            {
                                this.sessionNewValue--;
                                
                                var currentSessions=parseInt(this.services[service-1][2]);
                                currentSessions--;
                                this.services[service-1][2]=currentSessions;
                            }
        //
                            sessionValue.textContent=this.sessionNewValue;
                            
                        }else if(toPositive)
                        {
                            this.sessionNewValue++;

                            var currentSessions=parseInt(this.services[service-1][2]);
                            currentSessions++;
                            this.services[service-1][2]=currentSessions;

                            sessionValue.textContent=this.sessionNewValue;
                        }

            }


            
            restoreStylistsStates()
            {

                var stylistPoint=1;
                while(stylistPoint<7)
                {
                    var dialogStylistTable1=document.getElementById('dialogStylistTable'+stylistPoint);
                    var stylist1=document.getElementById('Stylist'+stylistPoint);
                    //dialogStylistTable1.style.backgroundColor="#f7f5f5";
                    stylist1.style.color='black';
                    stylist1.style.fontSize='10pt';
                    this.stylistState[stylistPoint-1]=0;
                    
                    stylistPoint++;
                }
                           
            }

            markStylist(stylist,service)
            {
               
                            var dialogStylistTable1=document.getElementById('dialogStylistTable'+stylist);
                            var stylist1=document.getElementById('Stylist'+stylist);
                            
                            if(this.stylistState[stylist-1]==0)
                            {
                                //dialogStylistTable1.style.backgroundColor="#eed3bc";
                                stylist1.style.color='white';
                                stylist1.style.fontSize='12pt';
                                this.stylistState[stylist-1]=1;

                                this.services[service-1].push('Stylist: Dion');
                      
                            }else if(this.stylistState[stylist-1]==1)
                            {
                                //dialogStylistTable1.style.backgroundColor="#f7f5f5";
                                stylist1.style.color='black';
                                stylist1.style.fontSize='10pt';
                                this.stylistState[stylist-1]=0;

                                var pointToAddOn=this.services[service-1].length+1;
                                var stylistIndex=this.services[service-1].indexOf('Dion');
                                this.services[service-1].splice(stylistIndex,1);

                            }
         
            }
 
        }

        myController=new controller2();
        shortlisted.addEventListener("click", function () { myController.showPop(); });
        closePopup.addEventListener("click", function () { myController.removePop();});
        window.addEventListener("click", function (event) {myController.removeByBackground();});

        var hasBeenClearedForStart=false;

        
           //sessionStorage.clear();
        
        
    </script>
		
    
    <?php include '../partial/footer.php';?>
</body>
</html>