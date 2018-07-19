<br>
<br>
<br>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home" aria-expanded= "true" >Hotel General</a></li>
    <li><a data-toggle="tab" href="#menu1" aria-expanded= "false" class="here">Hotel Extras</a></li>
    <li><a data-toggle="tab" href="#menu2" aria-expanded= "false">Hotel Meta</a></li>
    <li><a data-toggle="tab" href="#menu3" aria-expanded= "false">Hotel Contact</a></li>
    <li><a data-toggle="tab" href="#menu4" aria-expanded= "false">Hotel Policy</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active fade active show">                  
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-status" name="status">Status</h5>
                                </div>
                                <div class="col-md-10">
                                    <select class="addcar-status-work">
                                        <option value="1">Enabled</option>
                                        <option value="2">Disabled</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 20px;">
                                <div class="col-md-2">
                                    <h5 class="addcar-status">Hotel Name</h5>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" name="hotel_name" class="input-car-name" placeholder="Hotel Name">
                                </div>
                            </div>
                            <div class="row" style="margin-top: 20px;">
                            <div class="col-md-2">
                                <h5 class="addcar-status">Hotel Description</h5>
                            </div>
                            <div class="col-md-10">
                                <textarea name="editor1"></textarea>
                            </div>
                        </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-status">Stars</h5>
                                </div>
                                <div class="col-md-10">
                                    <select class="addcar-status-work" name="stars">
                                        <option value="1">0</option>
                                        <option value="2">1</option>
                                        <option value="3">2</option>
                                        <option value="4">3</option>
                                        <option value="5">4</option>
                                        <option value="6">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-pickup">Hotel Type</h5>
                                </div>
                                <div class="col-md-10">
                                    <select class="addcar-passenger-work" name="hotel_type">
                                        <option value="1">Apartment</option>
                                        <option value="2">Hotel</option>
                                        <option value="3">Guest Room</option>
                                        <option value="4">Motel</option>
                                        <option value="5">Residence</option>
                                        <option value="6">Resort</option>
                                        <option value="7">Time Share</option>
                                        <option value="8">Extended Stay</option>
                                        <option value="9">Villa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-pickup">Location</h5>
                                </div>
                                <div class="col-md-10">
                                    <select class="addcar-passenger-work" name="location">
                                        <option value="1">Auto</option>
                                        <option value="2">Manual</option>
                                        <option value="3">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-pickup">Airport Pickup</h5>
                                </div>
                                <div class="col-md-10">
                                    <select class="addcar-passenger-work" name="airport_pickup">
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-pickup">Featured</h5>
                                </div>
                                <div class="col-md-3">
                                    <select class="addcar-passenger-work" name="featured">
                                        <option value="1">No</option>
                                        <option value="2">Yes</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group has-feedback car-cal-from">
                                       <input type="text" class="form-control" id="datepicker" placeholder="From" id="input" name="featured_to">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group has-feedback car-cal-from">
                                       <input type="text" class="form-control" id="datechecker" placeholder="From" id="input" name="featured_from">
                                    </div>
                                 </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-pickup tax">Var Tax</h5>
                                </div>
                                <div class="col-md-3">
                                    <select class="addcar-passenger-work" name="var_tax">
                                        <option value="1">Fixed</option>
                                        <option value="2">Percentage</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <input type="" name="" class="addcar-input-deposit">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2" style="margin-bottom: 30px;">
                                    <h5 class="addcar-pickup">Related Hotels</h5>
                                </div>
                                <div class="col-md-8">
                                    <input type="" name="" class="addcar-input-related" name="related_hotels">
                                </div>
                            </div>
                            <hr>
                            <h5>ADD ADDRESS</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <br>
                                           Enter Location 
                                        </div>
                                        <div class="col-md-8">
                                            <br>
                                           <input type="text" name="google" class="form-control" placeholder="Enter a query"> 
                                        </div>
                                        <div class="col-md-4">
                                            <br>
                                           Latitude 
                                        </div>
                                        <div class="col-md-8">
                                            <br>
                                           <input type="text" name="latitude" class="form-control"> 
                                        </div>
                                           <div class="col-md-4">
                                            <br>
                                           Longitude 
                                        </div>
                                        <div class="col-md-8">
                                            <br>
                                           <input type="text" name="longitude" class="form-control"> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d54422.736651151965!2d74.34114!3d31.512594!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1531132647096" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-2" style="margin-bottom: 30px;">
                                    <button type="submit" class="addcar-button" name="hotel_gen">Submit</button>
                                </div>
                                
                            </div>
                            <hr>
                    </div>
                </div>
            </div> 
            <!-- END GENERAL -->
    </div>
    <div id="menu1" class="tab-pane fade">
                    <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                            <h4>Add Hotel</h4>
                            <div class="box">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="control control--checkbox check-me check-to"> Select All
                                                    <input type="checkbox" name="check1" / >
                                                    <div class="control__indicator"></div>
                                        </label>
                                        <hr>
                                    </div>
                                    <!-- ONE LINE -->
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Airport Transport
                                                    <input type="checkbox" name="check2"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Night Club
                                                    <input type="checkbox" name="check3"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Business Center
                                                    <input type="checkbox" name="check4"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Disabled Facilities
                                                    <input type="checkbox" name="check5"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Restaurant
                                                    <input type="checkbox" name="check6"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Laundry Service
                                                    <input type="checkbox" name="check8"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Swimming Pool
                                                    <input type="checkbox" name="check9"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Bar Lounge
                                                    <input type="checkbox" name="check10"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Wi-Fi Internet
                                                    <input type="checkbox" name="check11"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Fitness Center
                                                    <input type="checkbox" name="check12"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Shuttle Bus Service
                                                    <input type="checkbox" name="check13"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Inside Parking
                                                    <input type="checkbox" name="check14"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> SPA
                                                    <input type="checkbox" name="check15"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Bissiness Class Traveling
                                                    <input type="checkbox" name="check16"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Fitness Center
                                                    <input type="checkbox" name="check17"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Banquet Hall
                                                    <input type="checkbox" name="check18"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Children Activites
                                                    <input type="checkbox" name="check19"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Air Conditioner
                                                    <input type="checkbox" name="check20"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Pets Allowed
                                                    <input type="checkbox" name="check21"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Cards Accepted
                                                    <input type="checkbox" name="check22"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Elevator
                                                    <input type="checkbox" name="check23"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                </div>
                                <hr>
                                <a class="btn btn-primary blue-btn" href="#" role="button">Submit</a>
                                
                            </div>
                    </div>
                </div>
            </div> 
            <!-- END MAIN CONTENT-->
    </div>
    <div id="menu2" class="tab-pane fade">
                <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                            <h4>Add Hotel</h4>
<br>
                                <div class="row form-group">
                                    <div class="col col-md-2">
                                    <label class=" form-control-label">Meta Title</label>
                                    </div>
                                    <div class="col-12 col-md-6">
                                    <input name="meta_title" placeholder="Meta Title" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-2">
                                    <label class=" form-control-label">Meta Keywords</label>
                                    </div>
                                    <div class="col-12 col-md-6">
                                    <textarea name="meta_keyword" placeholder="Meta Keywords" class="form-control" type="text" rows="2"></textarea>
                                    </div>
                                </div>
                              <div class="row form-group">
                                    <div class="col col-md-2">
                                    <label class=" form-control-label">Meta Description</label>
                                    </div>
                                    <div class="col-12 col-md-6">
                                    <textarea name="meta_description" placeholder="Meta Description" class="form-control" type="text" rows="3"></textarea>
                                    </div>
                                </div> 
                                <hr>
                                <a class="btn btn-primary blue-btn" href="#" role="button">Submit</a>  
                            </div> 
                    </div>
                </div> 
            <!-- END MAIN CONTENT-->
    </div>
    <div id="menu3" class="tab-pane fade">
                  <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                            <h4>Add Hotel</h4>
<br>
                                <div class="row form-group">
                                    <div class="col col-md-2">
                                    <label class=" form-control-label">Hotel's Email</label>
                                    </div>
                                    <div class="col-12 col-md-6">
                                    <input name="hotel_email" placeholder="Email" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-md-2 control-label text-left">Hotel's Website</label>
                                    <div class="col-md-6">
                                      <input name="hotel_website" placeholder="Website" class="form-control" type="text">
                                    </div>
                              </div>
                              <div class="row form-group">
                                    <label class="col-md-2 control-label text-left">Phone</label>
                                    <div class="col-md-6">
                                      <input name="hotel_phone" placeholder="Phone" class="form-control" type="text">
                                    </div>
                              </div> 
                                <hr>
                                <a class="btn btn-primary blue-btn" href="#" role="button">Submit</a>  
                            </div> 
                    </div>
                </div> 
            <!-- END MAIN CONTENT-->
    </div>
        <div id="menu4" class="tab-pane fade">
               <!-- Hotel Policy -->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="policy-status">Check in</h5>
                                </div>
                                <br> 
                                <div class="col-md-3">
                                    <br>
                                   <input type="text" class="form-control hi" id="datethere" placeholder="Check in" name="check_in">  
                                </div>
                                <div class="col-md-1">
                                    <h5 class="policy-status">Check out</h5>
                                </div>
                                <div class="col-md-3">
                                    <br>
                                   <input type="text" class="form-control hi" id="datehere" placeholder="Check out" name="check_out">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="policy-status">Payment Options</h5>
                                </div>
                                <div class="col-md-10">
                                    <input list="hosting-plan" type="text" class="policy-input" name="payment_options">
 
                                        <datalist id="hosting-plan">
                                            <option value="Cash"/>
                                            <option value="Pay on Arrival"/>
                                            <option value="Credit Card"/>
                                            <option value="Wire Transfer"/>
                                        </datalist>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="policy-status">Payment Options</h5>
                                </div>
                                <div class="col-md-10">
                                    <textarea name="" id="" cols="100" rows="3" class="policy-car-description" name="payment_option"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2" style="margin-bottom: 30px;">
                                    <a class="btn btn-primary blue-btn" href="#" role="button">Submit</a>
                                </div>
                                
                            </div>
                    </div>
                </div>
            </div>
            <!-- Hotel Policy -->
    </div>
  </div>
