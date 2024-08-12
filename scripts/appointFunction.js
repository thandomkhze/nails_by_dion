class formatter
        {
            showStatus()
            {
                var space=document.createElement('br');
                document.body.append(space); 

                var subheading=document.createElement('h3');
                subheading.textContent="Appointments' status ";//must point an array elemnt
                subheading.setAttribute('class','subheading');
                document.body.append(subheading); 

                var table=document.createElement('table');
                    document.body.appendChild(table);
                    table.setAttribute('class','statusTable');
                    table.setAttribute('id','table');

                    row=document.createElement('tr');
                    table.append(row);


                    cell=document.createElement('td');
                    cell.textContent="Appointment Deposit";//must point an array elemnt
                    cell.setAttribute('class','headingCellAppoint');
                    row.append(cell); 

                    
                    
                    

                    cell=document.createElement('td');
                    cell.textContent="Appointment Status ";//must point an array elemnt
                    cell.setAttribute('class','headingCellAppointStatus');
                    row.append(cell);

                    var row;
                    var rows=0;
                    var totalrows= localStorage.length;
                    var cells=0;
                    var cell;
                    var sets=0;
                    var numbering=0;
                    var deposit=Math.floor(Math.random()*2000);
                        
                        while(rows<1)
                        {
                            row=document.createElement('tr');
                            row.setAttribute('class','statusRow');
                            table.append(row);
                            numbering++;

                            cell=document.createElement('td');
                            cell.setAttribute('class', 'statusCell');
                            cell.textContent='R '+deposit;//must point an array elemnt
                            row.append(cell); 
                            numbering++;
                            
                            

                            

                            cell=document.createElement('td');
                            cell.setAttribute('class', 'statusCell2');
                            cell.textContent="Awaiting Confirmation ";
                            row.append(cell);
                            
                            rows++;
                        }

            }

            

            //pull from the server
            
            showAppointments()
            {


                var space=document.createElement('br');
               document.body.append(space); 
                var space=document.createElement('br');
                document.body.append(space); 
                
                var space=document.createElement('br');
                document.body.append(space); 

                var subheading=document.createElement('h3');
                subheading.textContent="Appointments ";//must point an array elemnt
                subheading.setAttribute('class','subheading');
                document.body.append(subheading); 

              


                var table2=document.createElement('table');
                    document.body.appendChild(table2);

                    table2.setAttribute('class','table2');
                    table2.setAttribute('id','table2');
                    table2.setAttribute('class','appointmentTable');
                    row2=document.createElement('tr');
                    table2.append(row2);
                    
                    subheading=document.createElement('tr');
                    table2.append(subheading);
                    cell2=document.createElement('td');
                    cell2.setAttribute('class','headingCellAppoint');
                    cell2.textContent="Service";//must point an array elemnt
                    row2.append(cell2);
                    
                    cell2=document.createElement('td');
                    cell2.setAttribute('class','headingCellAppoint');
                    cell2.textContent="what the hell??";//must point an array elemnt
                    row2.append(cell2);
                    

                    cell2=document.createElement('td');
                    cell2.textContent="Time";//must point an array elemnt
                    cell2.setAttribute('class','headingCellAppoint3');
                    row2.append(cell2);
                    
                    cell2=document.createElement('td');
                    cell2.textContent="Appointment";//must point an array elemnt
                    cell2.setAttribute('class','headingCellAppoint1');
                    row2.append(cell2);
                    
                    cell3=document.createElement('button');
                    cell3.textContent="Cancel All";
                    cell3.setAttribute('class','cancelButtonAppoint');
                    cell3.setAttribute('id',cancelButtonID);
                    cell3.setAttribute('onclick',cancelFunction);
                    

                    cell2=document.createElement('td');
                    
                    cell2.setAttribute('class','cancelAppointmentCell');
                    cell2.setAttribute('id','cancelCell');
                    cell2.setAttribute('onclick','newformatter.removeAllRows()');
                    cell2.append(cell3);
                    row2.append(cell2);
                    
                   

                    document.getElementById("dataPlot").innerHTML ="22222";
                    var row2;
                    var rows2=0;
 
                    var cells=0;
                    var cell2;
                    var cell3;
                    var sets=0;
                    var numbering2=0;
                    var rowsCreated=sessionStorage.length;
                    
                    
                    var rowNumber=0;
                    
                        if(rowsCreated>0)
                        {
                            while(rows2<rowsCreated)
                            {
                                var idName='row'+rowNumber;
                                row2=document.createElement('tr');
                                if(rows2%2==0)
                                {
                                    row2.setAttribute('class','evenRow');
                                }else
                                {
                                    row2.setAttribute('class','oddRow');
                                }
                                row2.setAttribute('id',idName);
                                table2.append(row2);
                                numbering2++;

                                cell2=document.createElement('td');
                                cell2.textContent=rows2+1;//must point an array elemnt
                                cell2.setAttribute('class', 'leftAppointmentCell');
                                cell2.setAttribute('onclick','newformatter.showPop()');
                                row2.append(cell2); 
                                numbering2++;



                                var key=sessionStorage.key(rows2);

                                var stringArray=sessionStorage.getItem(key);

                               var actualArray=JSON.parse(stringArray);



                                cell2=document.createElement('td');
                                cell2.textContent=Math.floor(Math.random()*23)+":"+Math.floor(Math.random()*59);;
                                cell2.setAttribute('class', 'appointmentTimeCell');
                                cell2.setAttribute('id','appointmentDetails');
                                cell2.setAttribute('onclick','newformatter.showPop()');
                                row2.append(cell2);
                                numbering2++;

                                cell2=document.createElement('td');
                                cell2.textContent=actualArray[1];
                                cell2.setAttribute('class', 'appointmentCell');
                                cell2.setAttribute('id','appointmentDetails');
                                cell2.setAttribute('onclick','newformatter.showPop()');
                                row2.append(cell2);
                                numbering2++;

                                var cancelButtonID='cancelAppointButton'+rows2.toString();
                                var cancelFunction='newformatter.cancelAppointment('+rows2+')';
                                cell3=document.createElement('button');
                                cell3.setAttribute('class','cancelButtonAppoint');
                                cell3.setAttribute('id',cancelButtonID);
                                cell3.setAttribute('onclick',cancelFunction);
                                
                                cell3.textContent="Cancel";

                                
                                cell2=document.createElement('td');
                                //cell2.textContent="Cancel";
                                cell2.setAttribute('class', 'appointmentCell');
                                cell2.setAttribute('onclick', 'newformatter.removeRows('+idName+')');
                                cell2.setAttribute('class','cancelAppointmentCell')

                                cell2.append(cell3);
                                row2.append(cell2);
                                
                                
                                
                                rows2++;
                                rowNumber++;
                            }

                        }
            }

            removeAllRows()
            {
               
                    table2.remove();
               
               return 0;
            }

            removeRows(rowToDelete)
            {
                rowToDelete.remove();
                
            }



            showPop(info)
            {
               popupBack.classList.add("show");
                var textdata=document.getElementById('textdata');
                
                if(info==1)
                {
                    textdata.textContent="First";
                }
                
                if(info==2)
                {
                    textdata.textContent="Second";
                }

                if(info==1000)
                {
                    textdata.textContent="This is the shortlist";
                }
                
            }

            dayStart=1;
            incDay()
            {
                var day=document.getElementById('day');
                
                this.dayStart++;
                day.textContent=this.dayStart;
            }

            months=['Jan','Feb','March','April','May','June'];
            point=-1;
            incMonth()
            {
                this.point++;

                if(this.point==6)
                {
                              this.point=0;      
                }
                var month=document.getElementById('month');
                
                month.textContent=this.months[this.point];
                
            }

            removePop()
            {
                popupBack.classList.remove("show");
            }

            removeByBackground()
            {
                if (event.target == popupBack) 
                {
                    popupBack.classList.remove("show");
                }
            }

            start=7;
            addhour()
            {
                var hAdder=document.getElementById('hour');
                this.start++;

                hAdder.textContent=this.start;
            }

            subhour()
            {
                var hAdder2=document.getElementById('hour');
                this.start--;

                hAdder2.textContent=this.start;
            }

            minStart=10;
            addmin()
            {
                var hAdder=document.getElementById('minute');
                this.minStart++;

                hAdder.textContent=this.minStart;
            }

            submin()
            {
                var hAdder2=document.getElementById('minute');
                this.minStart--;

                hAdder2.textContent=this.minStart;
            }

            cancelAppointment(record)
            {
                var key=sessionStorage.key(record);
                sessionStorage.removeItem(key);
            }
            base()
            {

            }

        }

        