@extends('Layout.app')
@section('content')
<div>
    <div class="row" style="position: relative;background: #142850 ;width: 100%;margin-right: 0px;margin-left: 0px;">
        <div style="padding:8px 35px;">
            <div>
                <h3 style="margin-bottom: 0px;color:white"><i class="typcn typcn-home-outline" aria-hidden="true"></i> |
                    Employeeasas</h3>
            </div>
        </div>
        <div class="absolute_add_btn" style=""><a href="{{ url('/Superadmin/Add_User') }}"><i
                    class="fa fa-arrow-left fafa_add_circle_left" aria-hidden="true"></i></a><a
                href="{{ url('/Superadmin/Add_User') }}"><i class="fa fa-plus fafa_add_circle_right"
                    aria-hidden="true"></i></a></div>
    </div>
</div>
<br>
<div class="margin_left_right">
    <table id="example" class="table table-hover" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="/asset/images/Anonymous_Mask.png" class="navbar_profile_icon_name"> Tiger
                    Nixon
                </td>
                <td class="grey_font">System Architect</td>
                <td class="grey_font">Edinburgh</td>
                <td class="grey_font">61</td>
                <td class="grey_font"><i class="fa fa-circle blue_circle" aria-hidden="true"></i> Active</td>
                <td class="grey_font"><a href=""><img
                            src="/asset/css/zondicons/zondicons/edit-pencil.svg"
                            style="width: 15px;margin-right: 20px;    filter: invert(0.5);" alt=""></a><a href=""><img
                            src="/asset/css/zondicons/zondicons/close.svg"
                            style="width: 15px;    filter: invert(0.5);" alt=""></a>
                </td>
            </tr>
            <tr>
                <td><img src="/asset/images/Anonymous_Mask.png" class="navbar_profile_icon_name"> Airi
                    Satou
                </td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td><i class="fa fa-circle yellow_circle" aria-hidden="true"></i> In Active</td>
                <td class="grey_font"><a href=""><img
                            src="/asset/css/zondicons/zondicons/edit-pencil.svg"
                            style="width: 15px;margin-right: 20px;    filter: invert(0.5);" alt=""></a><a href=""><img
                            src="/asset/css/zondicons/zondicons/close.svg"
                            style="width: 15px;    filter: invert(0.5);" alt=""></a>
                </td>
            </tr>
            <tr>
                <td>Brielle Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td>2012/12/02</td>
                <td>$372,000</td>
            </tr>
            <tr>
                <td>Herrod Chandler</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>59</td>
                <td>2012/08/06</td>
                <td>$137,500</td>
            </tr>
            <tr>
                <td>Rhona Davidson</td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>55</td>
                <td>2010/10/14</td>
                <td>$327,900</td>
            </tr>
            <tr>
                <td>Colleen Hurst</td>
                <td>Javascript Developer</td>
                <td>San Francisco</td>
                <td>39</td>
                <td>2009/09/15</td>
                <td>$205,500</td>
            </tr>
            <tr>
                <td>Sonya Frost</td>
                <td>Software Engineer</td>
                <td>Edinburgh</td>
                <td>23</td>
                <td>2008/12/13</td>
                <td>$103,600</td>
            </tr>
            <tr>
                <td>Jena Gaines</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>30</td>
                <td>2008/12/19</td>
                <td>$90,560</td>
            </tr>
            <tr>
                <td>Quinn Flynn</td>
                <td>Support Lead</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2013/03/03</td>
                <td>$342,000</td>
            </tr>
            <tr>
                <td>Charde Marshall</td>
                <td>Regional Director</td>
                <td>San Francisco</td>
                <td>36</td>
                <td>2008/10/16</td>
                <td>$470,600</td>
            </tr>
            <tr>
                <td>Haley Kennedy</td>
                <td>Senior Marketing Designer</td>
                <td>London</td>
                <td>43</td>
                <td>2012/12/18</td>
                <td>$313,500</td>
            </tr>
            <tr>
                <td>Tatyana Fitzpatrick</td>
                <td>Regional Director</td>
                <td>London</td>
                <td>19</td>
                <td>2010/03/17</td>
                <td>$385,750</td>
            </tr>
            <tr>
                <td>Michael Silva</td>
                <td>Marketing Designer</td>
                <td>London</td>
                <td>66</td>
                <td>2012/11/27</td>
                <td>$198,500</td>
            </tr>
            <tr>
                <td>Paul Byrd</td>
                <td>Chief Financial Officer (CFO)</td>
                <td>New York</td>
                <td>64</td>
                <td>2010/06/09</td>
                <td>$725,000</td>
            </tr>
            <tr>
                <td>Gloria Little</td>
                <td>Systems Administrator</td>
                <td>New York</td>
                <td>59</td>
                <td>2009/04/10</td>
                <td>$237,500</td>
            </tr>
            <tr>
                <td>Bradley Greer</td>
                <td>Software Engineer</td>
                <td>London</td>
                <td>41</td>
                <td>2012/10/13</td>
                <td>$132,000</td>
            </tr>
            <tr>
                <td>Dai Rios</td>
                <td>Personnel Lead</td>
                <td>Edinburgh</td>
                <td>35</td>
                <td>2012/09/26</td>
                <td>$217,500</td>
            </tr>
            <tr>
                <td>Jenette Caldwell</td>
                <td>Development Lead</td>
                <td>New York</td>
                <td>30</td>
                <td>2011/09/03</td>
                <td>$345,000</td>
            </tr>
            <tr>
                <td>Yuri Berry</td>
                <td>Chief Marketing Officer (CMO)</td>
                <td>New York</td>
                <td>40</td>
                <td>2009/06/25</td>
                <td>$675,000</td>
            </tr>
            <tr>
                <td>Caesar Vance</td>
                <td>Pre-Sales Support</td>
                <td>New York</td>
                <td>21</td>
                <td>2011/12/12</td>
                <td>$106,450</td>
            </tr>
            <tr>
                <td>Doris Wilder</td>
                <td>Sales Assistant</td>
                <td>Sydney</td>
                <td>23</td>
                <td>2010/09/20</td>
                <td>$85,600</td>
            </tr>
            <tr>
                <td>Angelica Ramos</td>
                <td>Chief Executive Officer (CEO)</td>
                <td>London</td>
                <td>47</td>
                <td>2009/10/09</td>
                <td>$1,200,000</td>
            </tr>
            <tr>
                <td>Gavin Joyce</td>
                <td>Developer</td>
                <td>Edinburgh</td>
                <td>42</td>
                <td>2010/12/22</td>
                <td>$92,575</td>
            </tr>
            <tr>
                <td>Jennifer Chang</td>
                <td>Regional Director</td>
                <td>Singapore</td>
                <td>28</td>
                <td>2010/11/14</td>
                <td>$357,650</td>
            </tr>
            <tr>
                <td>Brenden Wagner</td>
                <td>Software Engineer</td>
                <td>San Francisco</td>
                <td>28</td>
                <td>2011/06/07</td>
                <td>$206,850</td>
            </tr>
            <tr>
                <td>Fiona Green</td>
                <td>Chief Operating Officer (COO)</td>
                <td>San Francisco</td>
                <td>48</td>
                <td>2010/03/11</td>
                <td>$850,000</td>
            </tr>
            <tr>
                <td>Shou Itou</td>
                <td>Regional Marketing</td>
                <td>Tokyo</td>
                <td>20</td>
                <td>2011/08/14</td>
                <td>$163,000</td>
            </tr>
            <tr>
                <td>Michelle House</td>
                <td>Integration Specialist</td>
                <td>Sydney</td>
                <td>37</td>
                <td>2011/06/02</td>
                <td>$95,400</td>
            </tr>
            <tr>
                <td>Suki Burks</td>
                <td>Developer</td>
                <td>London</td>
                <td>53</td>
                <td>2009/10/22</td>
                <td>$114,500</td>
            </tr>
            <tr>
                <td>Prescott Bartlett</td>
                <td>Technical Author</td>
                <td>London</td>
                <td>27</td>
                <td>2011/05/07</td>
                <td>$145,000</td>
            </tr>
            <tr>
                <td>Gavin Cortez</td>
                <td>Team Leader</td>
                <td>San Francisco</td>
                <td>22</td>
                <td>2008/10/26</td>
                <td>$235,500</td>
            </tr>
            <tr>
                <td>Martena Mccray</td>
                <td>Post-Sales support</td>
                <td>Edinburgh</td>
                <td>46</td>
                <td>2011/03/09</td>
                <td>$324,050</td>
            </tr>
            <tr>
                <td>Unity Butler</td>
                <td>Marketing Designer</td>
                <td>San Francisco</td>
                <td>47</td>
                <td>2009/12/09</td>
                <td>$85,675</td>
            </tr>
            <tr>
                <td>Howard Hatfield</td>
                <td>Office Manager</td>
                <td>San Francisco</td>
                <td>51</td>
                <td>2008/12/16</td>
                <td>$164,500</td>
            </tr>
            <tr>
                <td>Hope Fuentes</td>
                <td>Secretary</td>
                <td>San Francisco</td>
                <td>41</td>
                <td>2010/02/12</td>
                <td>$109,850</td>
            </tr>
            <tr>
                <td>Vivian Harrell</td>
                <td>Financial Controller</td>
                <td>San Francisco</td>
                <td>62</td>
                <td>2009/02/14</td>
                <td>$452,500</td>
            </tr>
            <tr>
                <td>Timothy Mooney</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>37</td>
                <td>2008/12/11</td>
                <td>$136,200</td>
            </tr>
            <tr>
                <td>Jackson Bradshaw</td>
                <td>Director</td>
                <td>New York</td>
                <td>65</td>
                <td>2008/09/26</td>
                <td>$645,750</td>
            </tr>
            <tr>
                <td>Olivia Liang</td>
                <td>Support Engineer</td>
                <td>Singapore</td>
                <td>64</td>
                <td>2011/02/03</td>
                <td>$234,500</td>
            </tr>
            <tr>
                <td>Bruno Nash</td>
                <td>Software Engineer</td>
                <td>London</td>
                <td>38</td>
                <td>2011/05/03</td>
                <td>$163,500</td>
            </tr>
            <tr>
                <td>Sakura Yamamoto</td>
                <td>Support Engineer</td>
                <td>Tokyo</td>
                <td>37</td>
                <td>2009/08/19</td>
                <td>$139,575</td>
            </tr>
            <tr>
                <td>Thor Walton</td>
                <td>Developer</td>
                <td>New York</td>
                <td>61</td>
                <td>2013/08/11</td>
                <td>$98,540</td>
            </tr>
            <tr>
                <td>Finn Camacho</td>
                <td>Support Engineer</td>
                <td>San Francisco</td>
                <td>47</td>
                <td>2009/07/07</td>
                <td>$87,500</td>
            </tr>
            <tr>
                <td>Serge Baldwin</td>
                <td>Data Coordinator</td>
                <td>Singapore</td>
                <td>64</td>
                <td>2012/04/09</td>
                <td>$138,575</td>
            </tr>
            <tr>
                <td>Zenaida Frank</td>
                <td>Software Engineer</td>
                <td>New York</td>
                <td>63</td>
                <td>2010/01/04</td>
                <td>$125,250</td>
            </tr>
            <tr>
                <td>Zorita Serrano</td>
                <td>Software Engineer</td>
                <td>San Francisco</td>
                <td>56</td>
                <td>2012/06/01</td>
                <td>$115,000</td>
            </tr>
            <tr>
                <td>Jennifer Acosta</td>
                <td>Junior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>43</td>
                <td>2013/02/01</td>
                <td>$75,650</td>
            </tr>
            <tr>
                <td>Cara Stevens</td>
                <td>Sales Assistant</td>
                <td>New York</td>
                <td>46</td>
                <td>2011/12/06</td>
                <td>$145,600</td>
            </tr>
            <tr>
                <td>Hermione Butler</td>
                <td>Regional Director</td>
                <td>London</td>
                <td>47</td>
                <td>2011/03/21</td>
                <td>$356,250</td>
            </tr>
            <tr>
                <td>Lael Greer</td>
                <td>Systems Administrator</td>
                <td>London</td>
                <td>21</td>
                <td>2009/02/27</td>
                <td>$103,500</td>
            </tr>
            <tr>
                <td>Jonas Alexander</td>
                <td>Developer</td>
                <td>San Francisco</td>
                <td>30</td>
                <td>2010/07/14</td>
                <td>$86,500</td>
            </tr>
            <tr>
                <td>Shad Decker</td>
                <td>Regional Director</td>
                <td>Edinburgh</td>
                <td>51</td>
                <td>2008/11/13</td>
                <td>$183,000</td>
            </tr>
            <tr>
                <td>Michael Bruce</td>
                <td>Javascript Developer</td>
                <td>Singapore</td>
                <td>29</td>
                <td>2011/06/27</td>
                <td>$183,000</td>
            </tr>
            <tr>
                <td>Donna Snider</td>
                <td>Customer Support</td>
                <td>New York</td>
                <td>27</td>
                <td>2011/01/25</td>
                <td>$112,000</td>
            </tr>
        </tbody>
    </table>
</div>
<script src="/asset/js/jquery.js"></script>
<script src="/asset/js/datatables.min.js"></script>
<script src="/asset/js/datatable-basic.js"></script>
<script>
    $('#example').DataTable({
        language: {
        searchPlaceholder: "Search records",
        search: "<i class='fa fa-search' aria-hidden='true'></i>",
        paginate: {
      next: '<span class="typcn typcn-arrow-right-outline"></span>', // or '→'
      previous: '<span class="typcn typcn-arrow-left-outline"></span>' // or '←'
    }
      }
   });
   $(document).ready(function() {
       getNotification();
       // getDaysDiffrence('2020-02-06 15:29:59');
    });

   /**This Function Will Fetch The Notification*/
   function getNotification() {
       // alert('hiiiiii');
       $("#notificationpatch").empty();
       $('#noti-container-count').text('0');
       $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                        url: '/getNotification',
                        type: 'get',
                        // data: formData,
                        success: function(data) {
                            // console.log(data);
                            // return;
                            //var response = data.trim();
                           var length = data.length
                            if (length === 0) {
                                 console.log(data);
                                 $("#notificationpatch").empty();
                                 $('#noti-container-count').text('0');
                            } else {
                                $('#noti-container-count').text(length);
                                // alert('BHJJ')
                                for (let m = 0; m < length; m++) {
                                    const element = data[m];
                                    var notificationid = element['notificationid'];
                                    var dynamicId = "'"+notificationid+"'"; ;
                                    var Status = element['Status']
                                    var dataeandTime = element['created_at'];
                                    var getDate = dataeandTime.split(" ")[0];
                                    var getTime = dataeandTime.split(" ")[1];
                                    var formateTime = conert24hoursto12hours(getTime);
                                    var getMessage = getDaysDiffrence(dataeandTime);
                                    // console.log('notificationid' , m , notificationid);
                                    // console.log('Status' , m , Status);
                                    // console.log('getDate' , m , getDate)
                                    // console.log('getTime' , m , getTime)
                                $("#notificationpatch").append('<a class="dropdown-item"  id = '+dynamicId+ 'href=""><div class="row"><div class="col-md-2">             <div class="notificatn_profile_div">                                <div class="notificatn_profile_div_main">                           <img src="/asset/images/Anonymous_Mask.png"                                         class="notification_icon"></div></div></div><div class="col-md-10 notifican_leftpad">'+Status+'<div> <span class="notification_bottom_patch_left">'+formateTime+'</span>        <span class="notification_bottom_patch_right">'+getMessage+'</span></div> </div></div></a>');
                                }
                            }
                        },
                    })
   }
   window.setInterval(function(){
      // getNotification();
}, 3000);
/** This Function is To Convert 24hours Formate To 12 Hours Formate*/
function conert24hoursto12hours(getTime) {
    var timeString = getTime;
    var H = +timeString.substr(0, 2);
    var h = (H % 12) || 12;
    var ampm = H < 12 ? "AM" : "PM";
    timeString = h + timeString.substr(2, 3) + ampm;
    return timeString;
}

/** Function To Get Date Diffrence */
function getDaysDiffrence(getDate) {
    var todaysDate = new Date();
    var currentDate = new Date(getDate);
    var diff_date = todaysDate - currentDate;
    // console.log(Fianltime);
    var years = Math.floor(diff_date/31536000000);
    var months = Math.floor((diff_date % 31536000000)/2628000000);
    // var weeks = Math.round(((diff_date % 31536000000) % 2628000000)/ 604800000);
    var weeks =  Math.floor(((diff_date % 31536000000) % 2628000000) / 604800000)
    var days = Math.floor((((diff_date % 31536000000) % 2628000000) % 604800000)/86400000);

    var Fianltime = years+" "+months+" "+weeks+" "+days;
    var getAllAary = Fianltime.split(" ");
    let meassage = '';
    // console.log(getAllAary[3]);
    console.log(Fianltime);
    if(getAllAary[3] == 0 && getAllAary[2] == 0 && getAllAary[1] == 0 && getAllAary[0] == 0) {
        meassage = 'Today';
        // console.log( "Todays" , meassage);
    } else {
        if (getAllAary[3] > 0  && getAllAary[2] == 0 && getAllAary[1] == 0 && getAllAary[0] == 0) {
            meassage = getAllAary[3] + ' days ago';
          //   console.log( "No Of Days" , meassage);
        } else {
            if(getAllAary[2] > 0 && getAllAary[1] == 0 && getAllAary[0] == 0) {
                meassage = getAllAary[2] + ' Week ago' ;
               //  console.log( "No Of Weeks" , meassage);
            } else {
                if (getAllAary[1] > 0 &&  getAllAary[0] == 0) {
                    meassage = getAllAary[1] + ' Month ago' ;
                    // console.log( "No Of Mont" , meassage);
                } else {
                    meassage = getAllAary[0] + ' Year ago' ;
                    // console.log( "No Of Mont" , meassage);
                }

            }


        }
    }

    return meassage;

    // if (days === 0) {
    //     console.log('today');
    // } else if(days > 0 && days < 7) {
    //     console.log('days');
    // } else if(days > 7) {
    //     console.log(days);
    // }
    // console.log(days);
}
</script>
@endsection
