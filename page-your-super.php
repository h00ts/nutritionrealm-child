<?php
/* Template Name: Your Super */

get_header();

$template_id = 'yoursuper';

$td_enable_or_disable_page_comments = td_util::get_option('tds_disable_comments_pages');
?>

<style type="text/css">
.compare_stripe {
    width:100%;
    background-size:cover;
    background-repeat:no-repeat;
    background-attachment: fixed;
    background-position: center center;
}
.compare_column-30 {
    width:100%;
    padding:1em 0;
}

.compare_column-50 {
    width:100%;
    max-width:640px;
    background-size:cover;
    background-position: center center;
    background-attachment:scroll;
    background-repeat:no-repeat;
    padding:2em 0;

}
.compare_column-70 {
    width:100%;
    max-width:896px;
    padding:2em 0;

}
.compare_product {

}
.compare_wrap {
    width:100%;
    max-width:1280px;
    margin:0 auto;
    display:flex;
    justify-content:space-around;
    flex-direction: column;
}
.compare_wrap_responsive {
    display:block;
}

.compare_content {
    width:100%;
    max-width:1280px;
    margin:0 auto;
    padding: 4em 2em;
}
.compare_content h1 {
    font-size:3em;
    font-weight:bold;
    line-height:1.1;
}
.compare_content h2 {
    font-size:2.5em;
    font-weight:bold;
}
.compare_content p {
    line-height: 1.6;
    max-width: 900px;
    font-size: 1.25em;
    text-align: center;
    margin: 1em auto;
}
strong {
    color:rgba(21,155,61);
}
.block {
    background:#FFF;
    padding:1.5em;
}
ul.compare_pro {
    list-style-image: url("/wp-content/themes/Newspaper-child/svg/pro.svg");
}
ul.compare_con {
    list-style-image: url("/wp-content/themes/Newspaper-child/svg/con.svg");
}
ul.compare_collection-list {
    list-style-image: url("/wp-content/themes/Newspaper-child/svg/pro.svg");
}
li {
    font-size:1.125em;
    line-height: 1.5;
    padding:.5em;
}
.compare_cta, .compare_cta:link, .compare_cta:active, .compare_cta:visited {
    margin: 2em auto 1em auto;
    background: rgb(0,193,190);
    color: #FFF;
    padding: 1em;
    font-size: 1.5em;
    display: block;
    width: 300px;
    text-align: center;
    border-radius: 35px;;
}

.compare_cta:hover {
    background:#2C807E;
    color:#FFF;
}

.compare_overall-rating h1 {
    margin:auto;line-height:100px;text-align:center;color:rgb(0,193,190);
    font-size:1.5em
}
.compare_product {
    display:none;
}

.table th {
    text-align:center;
}
.table thead th {
    vertical-align: middle;
}
.table tbody th {
    color:#31BAB5;
    font-size: 1em;
    padding:1em 0;
    overflow:hidden;
}

.table td {
    min-width:115px;
}

.table-striped tbody tr {
    background-color: rgba(236,250,255,.95);
}

.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(247,254,255,.95);
}

tbody img {
    width:16%;
    max-width:40px;
}

.compare_column-50 .compare_content {
    padding-top:0;
}

@media screen and (min-width:768px){

    .table tbody th {
    font-size: 2em;
}

.compare_content h1 {
    font-size:4em;
}

    .compare_column-30 {
        width:32%;
        max-width:420px;
        padding:2em 0;
    }
    .compare_wrap_responsive {
        display:flex;
        justify-content: center;
    }
    .compare_overall-rating h1 {
        line-height:220px;
        font-size:3em
    }
    .compare_product {
    margin-top: -350px;
    margin-left: -100px;
    width: 180%;
    display:block;
    }
}
</style>

<div class="compare_stripe" style="background:linear-gradient(0deg, rgba(243,248,252,1) 0%, rgba(107,235,231,1) 100%);">
    <div class="compare_wrap_responsive">
        <div class="compare_column-50">
            <img src="https://www.nutritionrealm.com/wp-content/uploads/2019/07/IMAGE-1-1-1.png" alt="Your Super" style="padding-top:3em;">
        </div>
        <div class="compare_column-50" style="text-align:right;">
            <div class="compare_content" style="color:#2C807Etext-align:right;">
            <h1 style="color:#2C807E;text-align:center;margin-top:0;">Better Results for a Better Price with<br> Your Super!</h1>
            <p style="font-weight:lighter">Getting your ideal summer body doesn't have to be expensive! Save over $70 monthly when you pick Your Super over the competitor.</p>
            <a href="https://yoursuper.com/collections/your-superfoods" class="compare_cta" style="margin-bottom: 0;margin-top:1em">Try Now</a>
            </div>
        </div>
    </div>
</div>

<div class="compare_stripe" style="background:rgb(243,248,252);">
    <div class="compare_content" style="padding-bottom:0;padding-top:8px">
        <h1 style="text-align:center;color:#00B18A;margin-top:0;margin-right:auto;margin-left:auto;max-width:800px;">Why do hundreds of customers love Your Super?</h1>
        <p>Your Super offers superfood supplements in the form of organic “mixes,” which are naturally-derived powders that can be easily added to all types of foods and beverages. Due to its versatility and great taste, customers across the country are choosing to add Your Super mixes to their everyday routines to give their nutrition a significant boost in a completely natural way.</p>
        <img src="https://www.nutritionrealm.com/wp-content/uploads/2019/07/PatriciasEditsFEB-1-e1563409823123.jpg" alt="Your Super">
    </div>
</div>

<div class="compare_stripe" style="background:linear-gradient(0deg, rgba(255,255,255,1) 0%, rgba(243,248,252,1) 100%);">
    <div class="compare_wrap_responsive" style="text-align:center">
        <div class="compare_column-30" style="padding:0;">
            <div class="compare_content" style="padding-bottom:0;">
            <h2>100% Natural</h2>
            <p>Your Super products are 100% plant-based and gluten-free. Your Super is NON-GMO and certified organic by the United States Department of Agriculture (USDA) </p>
            </div>
        </div>
        <div class="compare_column-30" style="padding:0;">
        <div class="compare_content" style="padding-bottom:0;">
            <h2>Quality and Transparency</h2>
            <p>Our Super has created a 100% transparent supply chain, helping users learn and understand where each of the ingredients in their products comes from.</p>
            </div>
        </div>
        <div class="compare_column-30" style="padding:0;">
        <div class="compare_content" style="padding-bottom:0;">
            <h2>Lab-Tested</h2>
            <p>Your Super ingredients and mixes are tested by third-party, independent laboratories. This ensures that their products contain no artificial additives and unnatural substances.</p>
            </div>
        </div>
    </div>
    <div class="compare_content" style="padding-top:0;">
        <a href="https://yoursuper.com/collections/your-superfoods" class="compare_cta">Try Now</a>
    </div>
</div>

<div class="compare_stripe">
    <div class="compare_content">
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col" style="border:0;border-bottom:1px solid #dee2e6;"></th>
            <th scope="col" class="text-center"><img src="https://www.nutritionrealm.com/wp-content/uploads/2019/07/logo.png" style="height:100px" alt="Your Super"></th>
            <th scope="col" class="text-center"><img src="https://www.nutritionrealm.com/wp-content/uploads/2019/07/organifilogo.png" style="width:160px" alt="Your Super"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">Price</th>
            <td><img src="https://www.nutritionrealm.com/wp-content/uploads/2019/07/STAR.png" alt="STAR">
            <img src="https://www.nutritionrealm.com/wp-content/uploads/2019/07/STAR.png" alt="STAR">
            <img src="https://www.nutritionrealm.com/wp-content/uploads/2019/07/STAR.png" alt="STAR">
            <img src="https://www.nutritionrealm.com/wp-content/uploads/2019/07/STAR.png" alt="STAR"></td>
            <td><img src="https://www.nutritionrealm.com/wp-content/uploads/2019/07/STAR.png" alt="STAR">
            <img src="https://www.nutritionrealm.com/wp-content/uploads/2019/07/STAR.png" alt="STAR">
            <img src="https://www.nutritionrealm.com/wp-content/uploads/2019/07/STAR.png" alt="STAR">
            </td>
            </tr>
            <tr>
            <th scope="row">Overall Quality</th>
            <td>
            <img src="https://www.nutritionrealm.com/wp-content/uploads/2019/07/STAR.png" alt="STAR">
            <img src="https://www.nutritionrealm.com/wp-content/uploads/2019/07/STAR.png" alt="STAR">
            <img src="https://www.nutritionrealm.com/wp-content/uploads/2019/07/STAR.png" alt="STAR">
            <img src="https://www.nutritionrealm.com/wp-content/uploads/2019/07/STAR.png" alt="STAR">
            <img src="https://www.nutritionrealm.com/wp-content/uploads/2019/07/STAR.png" alt="STAR"></td>
            <td>
            <img src="https://www.nutritionrealm.com/wp-content/uploads/2019/07/STAR.png" alt="STAR">
            <img src="https://www.nutritionrealm.com/wp-content/uploads/2019/07/STAR.png" alt="STAR">
            <img src="https://www.nutritionrealm.com/wp-content/uploads/2019/07/STAR.png" alt="STAR"></td>
            </tr>
            <tr>
            <th scope="row">Transparency</th>
            <td><img src="https://www.nutritionrealm.com/wp-content/uploads/2019/07/STAR.png" alt="STAR">
            <img src="https://www.nutritionrealm.com/wp-content/uploads/2019/07/STAR.png" alt="STAR">
            <img src="https://www.nutritionrealm.com/wp-content/uploads/2019/07/STAR.png" alt="STAR">
            <img src="https://www.nutritionrealm.com/wp-content/uploads/2019/07/STAR.png" alt="STAR">
            <img src="https://www.nutritionrealm.com/wp-content/uploads/2019/07/STAR.png" alt="STAR"></td>
            <td>
            <img src="https://www.nutritionrealm.com/wp-content/uploads/2019/07/STAR.png" alt="STAR">
            <img src="https://www.nutritionrealm.com/wp-content/uploads/2019/07/STAR.png" alt="STAR"></td>
            </tr>
            <tr>
            <th scope="row">Variety</th>
            <td><img src="https://www.nutritionrealm.com/wp-content/uploads/2019/07/STAR.png" alt="STAR">
            <img src="https://www.nutritionrealm.com/wp-content/uploads/2019/07/STAR.png" alt="STAR">
            <img src="https://www.nutritionrealm.com/wp-content/uploads/2019/07/STAR.png" alt="STAR">
            <img src="https://www.nutritionrealm.com/wp-content/uploads/2019/07/STAR.png" alt="STAR">
            <td><img src="https://www.nutritionrealm.com/wp-content/uploads/2019/07/STAR.png" alt="STAR">
            <img src="https://www.nutritionrealm.com/wp-content/uploads/2019/07/STAR.png" alt="STAR">
            <img src="https://www.nutritionrealm.com/wp-content/uploads/2019/07/STAR.png" alt="STAR">
            <img src="https://www.nutritionrealm.com/wp-content/uploads/2019/07/STAR.png" alt="STAR"></td>
            </tr>
            <tr>
            <th scope="row">Customer Service</th>
            <td><img src="https://www.nutritionrealm.com/wp-content/uploads/2019/07/STAR.png" alt="STAR">
            <img src="https://www.nutritionrealm.com/wp-content/uploads/2019/07/STAR.png" alt="STAR">
            <img src="https://www.nutritionrealm.com/wp-content/uploads/2019/07/STAR.png" alt="STAR">
            <img src="https://www.nutritionrealm.com/wp-content/uploads/2019/07/STAR.png" alt="STAR">
            <img src="https://www.nutritionrealm.com/wp-content/uploads/2019/07/STAR.png" alt="STAR"></td>
            <td>
            <img src="https://www.nutritionrealm.com/wp-content/uploads/2019/07/STAR.png" alt="STAR">
            <img src="https://www.nutritionrealm.com/wp-content/uploads/2019/07/STAR.png" alt="STAR">
            <img src="https://www.nutritionrealm.com/wp-content/uploads/2019/07/STAR.png" alt="STAR">

            </td>
            </tr>
        </tbody>
    </table>
    </div>
</div>

<div class="compare_stripe">
    <div class="compare_content" style="padding-top:0;">
        <img src="https://www.nutritionrealm.com/wp-content/uploads/2019/07/MP-Smoothie.jpg" alt="Your Super">
        </div>
        </div>
<div class="compare_stripe" style="background:linear-gradient(0deg, rgba(107,235,231,1) 0%, rgba(255,255,255,1) 100%);">
    <div class="compare_content">
        <h1 style="text-align:center;color:#00B18A;margin-left:auto;margin-right:auto;max-width:750px;">Why Does Your Super Offer More?</h1>
        <p style="margin:0 auto;">Your Super has established itself as one of the leading brands of natural products thanks to the unparalleled quality of their mixes and reasonable prices that make healthy nutrition accessible to everyone. Most importantly, they are committed to clean, transparent practices to create products that are 100% natural and compliant with the highest industry standards.
</p><p>
Your Super mixes can be purchased individually or in bundles. Each product and bundle is designed with a specific purpose such as detoxing or providing a boost of energy. Unsure which specific Your Super product is best for your wellness needs?  The company gives all new customers a 30-day money-back guarantee, meaning they will provide you with a refund if you are not satisfied with their products.
</p>
        <a href="https://yoursuper.com/collections/your-superfoods" class="compare_cta">Try Now</a>
    </div>
</div>


<?php

get_footer();
