<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Services</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
        <link rel="stylesheet" href="/../styles/client_styles.css">
        <link rel="stylesheet" href="/../styles/main_styles.css">
        <link rel="stylesheet" href="/../styles/style.css">
        <script src="../scripts/appointFunction.js" ></script>
    </head>
    <body>
    <?php $page = 'services'; include '../partial/header.php';?>


    
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

                            
                                            <td id='Stylist' class='serviceDetailCellH'>
                                                <select id='stylistSelector' class='StylistSelector'>
                                                    <option value=1>Dion</option>
                                                    <option value=2 >Mpho</option>
                                                    <option value=3>Vusi</option>
                                                    <option value=4>Jacob</option>
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
                                    <table id='dialogStylistTable2' class='dialogStylistTable' >
                                        <tr>
                                            <td class='DayPickCell'>
                                                <select id='daySelectorf' class='TimeSelection' >
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
                                    <table id='dialogStylistTable3' class='dialogStylistTable' >
                                        <tr>
                                            <td class='MonthPickCell'>
                                            <select id='monthSelector' class='TimeSelection'>
                                                    <option value=1>JAN</option>
                                                    <option value=2>FEB</option>
                                                    <option value=3>MAR</option>
                                                    
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
                                            <select id='hourSelector' class='TimeSelection'>
                                                    <option value=1>1</option>
                                                    <option value=2>2</option>
                                                    <option value=3>3</option>
                                                </select>
                                                hr:
                                                <select id='minSelector' class='TimeSelection'>
                                                    <option value=0>00</option>
                                                    <option value=1>01</option>
                                                    <option value=2>02</option>
                                                    <option value=3>03</option>
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
                                    <table id='dialogStylistTable4' class='dialogStylistTable' >
                                        <tr>
                                            <td id='Stylist' class='MonthPickCell'>
                                                <select id='sessionSelector' class='TimeSelection'>
                                                    <option value=1>1</option>
                                                    <option value=2>2</option>
                                                    <option value=3>3</option>
                                                    <option value=9>9</option>
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
    

        <button id='buttonBook' class="bookButton" onclick='newManager.bookService(1, true)'>Book</button>

        <button id='closePopup' class="closePopup" onclick='newformatter.removePop()'>Close</button>

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



    </div>

    </div>


    <p id="dataPlot">vv</p>



    <script>

            function alterData()
            {
                document.getElementById("dataPlot").innerHTML ="why does it...";
                
                 //this will pull from the server
                 var requestor = new XMLHttpRequest();
                    requestor.open("GET","/scripts/pullAppointments.php?k=8&path=1",true);
                    requestor.send();

                    requestor.onreadystatechange = function()
                    {
                        document.getElementById("dataPlot").innerHTML =requestor.responseText;//this.responseText
                    };
            }

            class manager {

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
            appointmentID=0;

             showPope(appointmentID,service, stylistoption, day, month, hour, min, sessions)
            {
                    
                    this.appointmentID=appointmentID;
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

//                    unitIncrement.setAttribute('onclick',"newManager.changeSessions(true, 1)");
  //                  unitDecrement.setAttribute('onclick',"newManager.changeSessions(false, 1)");
                    
                    var stylist=1;
                    var stylistTables=[null,dialogStylistTable2,dialogStylistTable3,
                    dialogStylistTable4];
                    
                    for(stylist=1;stylist<stylistTables.length;stylist++)
                    {
                        //stylistTables[stylist].setAttribute('onclick', 'newManager.markStylist('+stylist+','+service+')');
                    }

                    //have an array of all table values
                    //collect table record values and assign
                    //use the service number to target by id on DOM
                    //get inner values, target all columns
                    var tablestylist=document.getElementById('stylist'+service).innerHTML;
                    //find above variable in options by comparing option IDs
                    //compare them to options, function(tablestylist, optionid)=>return found/not found
                    
                    //if match, set the value on the selector>stylistSelector
                    //var stylistSelector=document.getElementById('stylistSelector');
                    
                    if(this.checkdata())//if getElementbyid('optionX1').value==tablestylist
                    {
                       // stylistSelector.value=tablestylist;
                    }
                    //set if statement for each selector
                    
                    //selector variables
                    document.getElementById("stylistSelector").value=stylistoption;//table cell value
                    document.getElementById("daySelectorf").value=day;
                    document.getElementById("monthSelector").value=month;
                    document.getElementById("hourSelector").value=hour;
                    document.getElementById("minSelector").value=min;
                    document.getElementById("sessionSelector").value=sessions;  

                    buttonBook.setAttribute('onclick','newManager.bookService('+service+',true)');

                popupBack.classList.add("show");

            }

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
                    //get selector values
                    var stylistValue=document.getElementById('stylistSelector');
                    var stylistValuefinal=stylistValue.options[stylistValue.selectedIndex].text;
                    var dayValue=document.getElementById('daySelectorf');
                    var dayValuefinal=dayValue.options[dayValue.selectedIndex].text;
                    var monthValue=document.getElementById('monthSelector');
                    var monthValuefinal=monthValue.options[monthValue.selectedIndex].text;
                    var hourValue=document.getElementById('hourSelector');
                    var hourValuefinal=hourValue.options[hourValue.selectedIndex].text;
                    var minValue=document.getElementById('minSelector');
                    var minValuefinal=minValue.options[minValue.selectedIndex].text;
                    var sessionValue=document.getElementById('sessionSelector');
                    var sessionValuefinal=sessionValue.options[sessionValue.selectedIndex].text;

                    //if, these codes for in and out of dialog
                
                   // var dayfound=document.getElementById('daySelectorf').value;
                   requestor.open("GET",'/scripts/pullAppointments.php?log='+service
                    +"&appointmentID="+this.appointmentID+"&service="+this.activeService
                    +"&stylist="+stylistValuefinal+"&day="+dayValuefinal+"&month="+monthValuefinal
                    +"&hour="+hourValuefinal+"&min="+minValuefinal+"&sessions="+sessionValuefinal+"&path=2"                    
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

            checkdata(tableValue, optionid)
            {
                //take stylist match it against all 3 options
                var stylists=['Dion','Vusi','mpho'];
                var isfound=false;
                var runs=0;
                while(runs<3)
                {
                    //if exists return true or else false
                    if(tableValue==stylists[runs])
                    {
                        isfound=true;
                        break;
                    }
                    runs++;
                }

                return isfound;
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

        var newformatter= new formatter(); 
        var newManager= new manager();
        //newformatter.showStatus();
        //newformatter.showAppointments();
        alterData();

    </script>

    <?php include '../partial/footer.php';?>    

    
</body>
</html>