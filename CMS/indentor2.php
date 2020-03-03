<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="favicon.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue.css">
        

    </head>
    <body>
        <div class="w3-container">
            <ul class="w3-ul w3-card-4">
                <li class="w3-bar">
                <img src="logo.jpg" class="w3-bar-item w3-circle w3-hide-small" style="width:100px">
                    <div class="w3-bar-item">
                        <span class="w3-large"><div class="w3-text-blue">POWER SYSTEM OPERATION CORPORATION LIMITED</div></span>
                        <span class="w3-text-red">(A Government of India Enterprise) CIN: U40105DL2009GOI188682</span><br>
                        <span class="w3-text-blue">North Eastern Regional Load Despatch Centre</span>
                    </div>
                </li>
            </ul>
        </div>
        <br><br>
        <ul class="nav md-pills nav-justified pills-aqua-gradient pills-rounded">
            <li class="active"><a data-toggle="pill" href="#home">Home</a></li>
            <li><a data-toggle="pill" href="#Indent">Indent</a></li>
            <li><a data-toggle="pill" href="#NIT">NIT</a></li>
            <li><a data-toggle="pill" href="#LOA">LOA</a></li>
            <li><a data-toggle="pill" href="#PostAward">Post Award</a></li>
            <li><a data-toggle="pill" href="#Billing">Billing</a></li>
            <li><a data-toggle="pill" href="#ContractClosing">Contract Closing</a></li>
            <li><a data-toggle="pill" href="#LOAAmmendment">LOA Ammendment</a></li>
        </ul>

        <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
              <h3>HOME</h3>
              <p>Some content.</p>
        </div>
        <div id="Indent" class="tab-pane fade">
            <h3>Indentor Details</h3>
            <form>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="Indentno">Indent No.</label>
                <input type="text" class="form-control" id="Indentno" placeholder="I-">
              </div>
              <div class="form-group col-md-6">
                <label for="NoteNo">Note Approval no.</label>
                <input type="text" class="form-control" id="NoteNo" placeholder="">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="WorkName">Work Name</label>
                <input type="text" class="form-control" id="WorkName" placeholder="">
              </div>
            </div>
            <div class="form-row">    
              <div class="form-group col-md-6">
                <label for="InitiationDate">Initiation Date</label>
                <input type="date" class="form-control" id="InitiationDate" placeholder="">
              </div>
              <div class="form-group col-md-6">
                <label for="Department">Department</label>
                <input type="text" class="form-control" id="Department" placeholder="">
              </div>  
            </div>
            <div class="form-row"> 
              <div class="form-group col-md-8">
                <label for="Name">Name</label>
                <input type="text" class="form-control" id="Name">
              </div>
              <div class="form-group col-md-4">
                <label for="Designation">Designation</label>
                <select id="inputState" class="form-control" id="Designation">
                  <option selected>Choose...</option>
                  <option>...</option>
                </select>
              </div>
            </div>
            
            <div class="form-row"> 
              <div class="form-group col-md-3">
                <label for="CostEstimate">Cost Estimate</label>
                <input type="number" class="form-control" id="CostEstimate">
                </div>
              <div class="form-group col-md-3">
                <label for="ExpenditureType">Expenditure Type</label>
                <select id="inputState" class="form-control" id="ExpenditureType">
                  <option selected>Choose...</option>
                  <option>...</option>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label for="WorkNature">Work Nature</label>
                <select id="inputState" class="form-control" id="WorkNature">
                  <option selected>Choose...</option>
                  <option>...</option>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label for="TenderType">Tender Type</label>
                <select id="inputState" class="form-control" id="TenderType">
                  <option selected>Choose...</option>
                  <option>...</option>
                </select>
              </div>
            </div> 
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="Proposal">Proposal</label>
                <input type="file" id="Proposal" name="Proposal">
              </div>
              <div class="form-group col-md-4">
                <label for="TS">TS</label>
                <input type="file" id="TS" name="TS">
              </div>
              <div class="form-group col-md-4">
                <label for="QR">QR</label>
                <input type="file" id="QR" name="QR">
              </div>  
            </div>
             <div class="form-row">
              <div class="form-group col-md-4">
                <label for="TnC">TnC</label>
                <input type="file" id="TnC" name="TnC">
              </div>
              <div class="form-group col-md-4">
                <label for="BOQ">BOQ</label>
                <input type="file" id="BOQ" name="BOQ">
              </div>
              <div class="form-group col-md-4">
                <label for="VendorList">Vendor List</label>
                <input type="file" id="VendorList" name="VendorList">
              </div>  
            </div>    
                
            <div class="form-row">
              <div class="form-group col-md-12">    
                    <button type="submit" class="btn btn-primary">Submit</button>
               </div>
            </div>      
            </form>
        </div>
            
            
        <div id="NIT" class="tab-pane fade">
            <div class="form-row" col-md-12>
            <h3>NIT</h3>
            </div>
            <form>
            <div class="form-row"> 
              <div class="form-group col-md-3">
                <label for="IndentNo">Indent No</label>
                <input type="number" class="form-control" id="IndentNo">
                </div>
              <div class="form-group col-md-3">
                <label for="ExpenditureType">Tender Type</label>
                <select id="inputState" class="form-control" id="ExpenditureType">
                  <option selected>Choose...</option>
                  <option>...</option>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label for="WorkNature">Note Approval Date</label>
                <input type="date" class="form-control" id="InitiationDate" placeholder="">
              </div>
              <div class="form-group col-md-3">
                <label for="TenderType">Issue date</label>
                <input type="date" class="form-control" id="InitiationDate" placeholder="">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="TnC">R0(C&M)</label>
                <input type="file" id="TnC" name="TnC">
              </div>
              <div class="form-group col-md-4">
                <label for="BOQ">R1(Indentor)</label>
                <input type="file" id="BOQ" name="BOQ">
              </div>
              <div class="form-group col-md-4">
                <label for="VendorList">R2(Finance)</label>
                <input type="file" id="VendorList" name="VendorList">
              </div>  
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="TnC">Final Approved NIT</label>
                <input type="file" id="TnC" name="TnC">
              </div>  
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="TenderType">Pre-Bid Meeting date</label>
                <input type="date" class="form-control" id="InitiationDate" placeholder="">
              </div>  
              <div class="form-group col-md-8">
                <label for="WorkName">Pre-Bid remarks</label>
                <input type="text" class="form-control" id="WorkName" placeholder="">
              </div>
            </div>
            
            <div class="form-row">
              <div class="form-group col-md-3">
                <label for="TenderType">Bid Opening Due date</label>
                <input type="date" class="form-control" id="InitiationDate" placeholder="">
              </div>  
              <div class="form-group col-md-3">
                <label for="WorkName">No of Extensions</label>
                <input type="number" class="form-control" id="IndentNo">
              </div>
              <div class="form-group col-md-3">
                <label for="TenderType">Bid Opening date</label>
                <input type="date" class="form-control" id="InitiationDate" placeholder="">
              </div> 
              <div class="form-group col-md-3">
                <label for="ExpenditureType">Stage</label>
                <select id="inputState" class="form-control" id="ExpenditureType">
                  <option selected>Choose...</option>
                  <option>Single</option>
                  <option>Double</option>
                </select>
               </div>  
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="VendorList">List of party Invited</label>
                    <input type="file" id="VendorList" name="VendorList">
                </div>
                <div class="form-group col-md-6">
                    <label for="VendorList">List of party Responded</label>
                    <input type="file" id="VendorList" name="VendorList">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="VendorList">Technical Evaluation</label>
                    <input type="file" id="VendorList" name="VendorList">
                </div>
                <div class="form-group col-md-6">
                    <label for="VendorList">Commercial Evaluation</label>
                    <input type="file" id="VendorList" name="VendorList">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">    
                    <button type="submit" class="btn btn-primary">Submit</button>
               </div>    
            </div>
        </form>
        </div>
            
        <div id="LOA" class="tab-pane fade">
            <h3>LOA</h3>
          <form>
            <div class="form-row"> 
              <div class="form-group col-md-3">
                <label for="IndentNo">Indent No</label>
                <input type="number" class="form-control" id="IndentNo">
             </div>
             <div class="form-group col-md-3">
                <label for="IndentNo">LOA No</label>
                <input type="text" class="form-control" id="IndentNo">
             </div>
             
                <div class="form-group col-md-3">
                <label for="TenderType">LOA Approval Date</label>
                <input type="date" class="form-control" id="InitiationDate" placeholder="">
              </div> 
                <div class="form-group col-md-3">
                <label for="TenderType"> LOA Placed Date</label>
                <input type="date" class="form-control" id="InitiationDate" placeholder="">
              </div> 
            </div>
              <div class="form-row">
                <div class="form-group col-md-12">
                <label for="WorkName">Party Name</label>
                <input type="text" class="form-control" id="WorkName" placeholder="">
                </div>    
              </div>
              <div class="form-row">
                <div class="form-group col-md-3">
                <label for="WorkName">Delivery Period</label>
                <input type="Number" class="form-control" id="WorkName" placeholder="">
                </div>
                <div class="form-group col-md-3">
                <label for="WorkName">Warranty Period</label>
                <input type="Number" class="form-control" id="WorkName" placeholder="">
                </div>
               <div class="form-group col-md-3">
                <label for="WorkName">Contract Value</label>
                <input type="Number" class="form-control" id="WorkName" placeholder="">
                </div>
                <div class="form-group col-md-3">
                <label for="WorkName">SD Value</label>
                <input type="Number" class="form-control" id="WorkName" placeholder="">
                </div>
              </div>
              <div class="form-row">
               <div class="form-group col-md-3">
                <label for="ExpenditureType">BG Applicable</label>
                <select id="inputState" class="form-control" id="ExpenditureType">
                  <option selected>Choose...</option>
                  <option>Yes</option>
                  <option>No</option>
                </select>
               </div>
               <div class="form-group col-md-3">
                <label for="ExpenditureType">CPG Applicable</label>
                <select id="inputState" class="form-control" id="ExpenditureType">
                  <option selected>Choose...</option>
                  <option>Yes</option>
                  <option>No</option>
                </select>
               </div>
               <div class="form-group col-md-3">
                <label for="ExpenditureType">LD Applicable</label>
                <select id="inputState" class="form-control" id="ExpenditureType">
                  <option selected>Choose...</option>
                  <option>Yes</option>
                  <option>No</option>
                </select>
               </div>
               <div class="form-group col-md-3">
                <label for="ExpenditureType">NDA Applicable</label>
                <select id="inputState" class="form-control" id="ExpenditureType">
                  <option selected>Choose...</option>
                  <option>Yes</option>
                  <option>No</option>
                </select>
               </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="VendorList">Upload NDA if Applicable</label>
                    <input type="file" id="VendorList" name="VendorList">
                </div>
              </div>    
              <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="VendorList">LOA R0(C&M)</label>
                    <input type="file" id="VendorList" name="VendorList">
                </div>
                <div class="form-group col-md-4">
                    <label for="VendorList">LOA R1(Indentor)</label>
                    <input type="file" id="VendorList" name="VendorList">
                </div>
                <div class="form-group col-md-4">
                    <label for="VendorList">LOA R2(Finance)</label>
                    <input type="file" id="VendorList" name="VendorList">
                </div>  
              </div>
              <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="VendorList">Final LOA</label>
                    <input type="file" id="VendorList" name="VendorList">
                </div>
              </div>            
              
            <div class="form-row">
                <div class="form-group col-md-12">    
                    <button type="submit" class="btn btn-primary">Submit</button>
               </div>    
            </div>
          </form>                
        </div>
            
            
        <div id="PostAward" class="tab-pane fade">
            <h3>Post Award</h3>
            <form>
              <div class="form-row"> 
              <div class="form-group col-md-6">
                <label for="IndentNo">Indent No</label>
                <input type="number" class="form-control" id="IndentNo">
             </div>
             <div class="form-group col-md-6">
                <label for="IndentNo">LOA No</label>
                <input type="number" class="form-control" id="IndentNo">
             </div>
              </div>
                
            <div class="form-row"> 
                <div class="form-group col-md-4">
                <label for="TenderType">Work Start Date</label>
                <input type="date" class="form-control" id="InitiationDate" placeholder="">
              </div> 
                <div class="form-group col-md-4">
                <label for="TenderType">Completion Date</label>
                <input type="date" class="form-control" id="InitiationDate" placeholder="">
              </div>
              <div class="form-group col-md-4">
                <label for="ExpenditureType">Work Progress</label>
                <select id="inputState" class="form-control" id="ExpenditureType">
                  <option selected>Choose...</option>
                  <option>Yet to Start</option>
                  <option>In Progress</option>
                  <option>Completed</option>
                </select>
               </div>  
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="VendorList">Upload BG</label>
                    <input type="file" id="VendorList" name="VendorList">
                </div>
            </div>                 
            <div class="form-row">
                <div class="form-group col-md-12">    
                    <button type="submit" class="btn btn-primary">Submit</button>
               </div>    
            </div>
            </form>    
        </div>
            
            
        <div id="Billing" class="tab-pane fade">
          <h3>Billing</h3>
          <form>
            <div class="form-row"> 
                <div class="form-group col-md-6">
                  <label for="IndentNo">Indent No</label>
                  <input type="number" class="form-control" id="IndentNo">
                </div>
             <div class="form-group col-md-6">
                <label for="IndentNo">LOA No</label>
                <input type="text" class="form-control" id="IndentNo">
             </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                <label for="WorkName">Work Name</label>
                <input type="text" class="form-control" id="WorkName" placeholder="">
                </div>    
            </div>  
            <div class="form-row">
                <div class="form-group col-md-12">
                <label for="WorkName">Party Name</label>
                <input type="text" class="form-control" id="WorkName" placeholder="">
                </div>    
            </div>
            <div class="form-row"> 
              <div class="form-group col-md-3">
                  <label for="IndentNo">Invoice No</label>
                  <input type="text" class="form-control" id="IndentNo">
              </div>
              <div class="form-group col-md-3">
                <label for="TenderType">Invoice Date</label>
                <input type="date" class="form-control" id="InitiationDate" placeholder="">
              </div>
             <div class="form-group col-md-3">
                <label for="IndentNo">Invoice Amount</label>
                <input type="number" class="form-control" id="IndentNo">
             </div>
             <div class="form-group col-md-3">
                <label for="IndentNo">Tax Amount</label>
                <input type="number" class="form-control" id="IndentNo">
             </div>
            </div>
            <div class="form-row"> 
              <div class="form-group col-md-4">
                  <label for="IndentNo">BR No</label>
                  <input type="text" class="form-control" id="IndentNo">
              </div>
              <div class="form-group col-md-4">
                <label for="TenderType">BR Date</label>
                <input type="date" class="form-control" id="InitiationDate" placeholder="">
              </div>
              <div class="form-group col-md-4">
                <label for="TenderType">Bill Payment Date</label>
                <input type="date" class="form-control" id="InitiationDate" placeholder="">
              </div>  
            </div>  
            <div class="form-row">
                <div class="form-group col-md-4">
                <label for="IndentNo">Released Amount</label>
                <input type="number" class="form-control" id="IndentNo">
             </div>
             <div class="form-group col-md-4">
                <label for="IndentNo">Tax Deducted</label>
                <input type="number" class="form-control" id="IndentNo">
             </div>
            <div class="form-group col-md-4">
                <label for="VendorList">Upload Bill</label>
                <input type="file" id="VendorList" name="VendorList">
            </div>
            </div>
              
            <div class="form-row">
                <div class="form-group col-md-12">    
                    <button type="submit" class="btn btn-primary">Submit</button>
               </div>    
            </div>  
          </form>            
        </div>
        <div id="ContractClosing" class="tab-pane fade">
          <h3>Contract Closing</h3>
          <form>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="IndentNo">LOA No</label>
                        <input type="text" class="form-control" id="IndentNo">
                    </div>
                    <div class="form-group col-md-9">
                        <label for="IndentNo">Work Name</label>
                        <input type="text" class="form-control" id="IndentNo">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="IndentNo">Party Name</label>
                        <input type="text" class="form-control" id="IndentNo">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="TenderType">Contract Closing Date</label>
                        <input type="date" class="form-control" id="InitiationDate" placeholder="">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="TenderType">BG Release Date</label>
                        <input type="date" class="form-control" id="InitiationDate" placeholder="">
                    </div>
                </div>
                <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="VendorList">CCPs(Indentor)</label>
                    <input type="file" id="VendorList" name="VendorList">
                </div>
                <div class="form-group col-md-4">
                    <label for="VendorList">CCPs(C&M)</label>
                    <input type="file" id="VendorList" name="VendorList">
                </div>
                <div class="form-group col-md-4">
                    <label for="VendorList">CCPs(Finance)</label>
                    <input type="file" id="VendorList" name="VendorList">
                </div>  
                </div>
                <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="VendorList">Contract Closing Approval</label>
                    <input type="file" id="VendorList" name="VendorList">
                </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group col-md-12">    
                        <button type="submit" class="btn btn-primary">Submit</button>
                   </div>    
                </div>  
          </form>
        </div>
        <div id="LOAAmmendment" class="tab-pane fade">
          <h3>LOA Ammendment</h3>
          <form>
            <div class="form-row"> 
              <div class="form-group col-md-5">
                <label for="IndentNo">Indent No</label>
                <input type="number" class="form-control" id="IndentNo">
             </div>
             <div class="form-group col-md-5">
                <label for="IndentNo">LOA No</label>
                <input type="text" class="form-control" id="IndentNo">
             </div>
             <div class="form-group col-md-2">
                <label for="IndentNo">Ammendment No</label>
                <input type="text" class="form-control" id="IndentNo">
             </div>   
            </div> 
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="VendorList">Upload LOA Ammendment</label>
                    <input type="file" id="VendorList" name="VendorList">
                </div>
            </div>  
              
            <div class="form-row">
                <div class="form-group col-md-12">    
                    <button type="submit" class="btn btn-primary">Submit</button>
               </div>    
            </div>
          </form>  
        </div>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>