<?php
include_once('header.php');
?>
<div class="crm-banner">
    <img src="..\images\images\crm-banner.jpg" alt="" srcset="" style="    width: 100%;">
</div>
<div class="crm-services">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 crm-col">
                <div class="crm-content">
                    <h2 class="crm-Head">WEBSITE</h2>

                    <p class="crm-para">CRM systems compile data from a range of different communication channels, including a company's website, telephone, email, live chat, marketing materials and more recently, social media.[2] They allow businesses to learn more about their target audiences and how to best cater for their needs, thus retaining customers and driving sales growth.[3] CRM may be used with past, present or potential customers. The concepts, procedures, and rules that a corporation follows when communicating with its consumers are referred to as CRM. This complete connection covers direct contact with customers, such as sales and service-related operations, forecasting, and the analysis of consumer patterns and behaviors,</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="crm-key">
    <div class="crm-key-head">
        <h3>KEY BENEFITS</h3>
    </div>
    <div class="container">
        <div class="row crm-key-row">
            <div class="col-md-4 crm-key-content">
                <h4 class="crm-key-subhead" onclick="showPanel('1')">Leads</h4>
            </div>
            <div class="col-md-4 crm-key-content">
                <h4 class="crm-key-subhead" onclick="showPanel('2')">Expansion</h4>
            </div>
            <div class="col-md-4 crm-key-content">
                <h4 class="crm-key-subhead" onclick="showPanel('3')">Online Customers</h4>
            </div>
        </div>
        
            <div class="row crm-key-subrow "  id="1">
              
                <div class="col-sm-4">
                    <img src="..\images\images\crm-key.png" alt="" class="crm-key-img1">
                </div>
                <div class="col-sm-8 crm-key-para1">
                    RM systems compile data from a range of different communication channels, including a company's website, telephone, email, live chat, marketing materials and more recently, social media.[2] They allow businesses to learn more about their target audiences and how to best cater for their needs, thus retaining customers and driving sales growth.[3] CRM may be used with past, present or potential customers.
                </div>
            </div>
            
            

            <div class="row  crm-key-subrow" id="2">
          
                <div class="col-sm-4">
                    <img src="..\images\images\crm-key.png" alt="" class="crm-key-img1">
                </div>
                <div class="col-sm-8 crm-key-para1">
                    vm systems compile data from a range of different communication channels, including a company's website, telephone, email, live chat, marketing materials and more recently, social media.[2] They allow businesses to learn more about their target audiences and how to best cater for their needs, thus retaining customers and driving sales growth.[3] CRM may be used with past, present or potential customers.
                </div>
            
            </div>

            <div class="row crm-key-subrow"  id="3" >
           
                <div class="col-sm-4">
                    <img src="..\images\images\crm-key.png" alt="" class="crm-key-img1" >
                </div>
                <div class="col-sm-8 crm-key-para1">
                    DM systems compile data from a range of different communication channels, including a company's website, telephone, email, live chat, marketing materials and more recently, social media.[2] They allow businesses to learn more about their target audiences and how to best cater for their needs, thus retaining customers and driving sales growth.[3] CRM may be used with past, present or potential customers.
                </div>
            </div>
           
        </div>
    </div>
</div>
<script>
    let i = 0;
    function showPanel(id) {

        var elements = document.getElementsByClassName("crm-key-subrow");
        for (let i = 0; i < elements.length; i++) {
            elements[i].style.display = "none";
            console.log("test");
        }
        document.getElementById(id).style.display = "block";
    }
</script>
<?php
include_once('footer.php');
?>