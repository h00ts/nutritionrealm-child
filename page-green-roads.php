<?php
/* Template Name: Green Roads */

get_header();

$template_id = 'greenroads';

$td_enable_or_disable_page_comments = td_util::get_option('tds_disable_comments_pages');
?>
<style type="text/css">
.pr_review_stripe {
    width:100%;
    background-size:cover;
    background-repeat:no-repeat;
    background-attachment: fixed;
    background-position: center center;
}
.pr_review_column-30 {
    width:100%;
    max-width:384px;
    padding:2em 0;

}
.pr_review_column-50 {
    width:100%;
    max-width:640px;
    background-size:cover;
    background-position: center center;
    background-attachment:scroll;
    background-repeat:no-repeat;
    padding:2em 0;

}
.pr_review_column-70 {
    width:100%;
    max-width:896px;
    padding:2em 0;

}
.pr_review_product {

}
.pr_review_wrap {
    width:100%;
    max-width:1280px;
    margin:0 auto;
    display:flex;
    justify-content:space-around;
    flex-direction: row;
}
.pr_review_wrap_responsive {
    display:block;
}

.pr_review_content {
    width:100%;
    max-width:1280px;
    margin:0 auto;
    padding: 4em 2em;
}
.pr_review_content h1 {
    font-size:3em;
    font-weight:bold;
    text-transform: uppercase;
    text-shadow: -1px 1px 2px rgba(0,0,0,.2);
}
.pr_review_content h2 {
    font-size:2.5em;
    font-weight:bold;
    text-transform: uppercase;
    text-shadow: -1px 1px 2px rgba(0,0,0,.2);
}
.pr_review_content p {
    line-height:1.8;
    font-size: 1.125em;
    text-shadow: -1px 1px 2px rgba(0,0,0,.1);
}
strong {
    color:rgba(21,155,61);
}
.block {
    background:#FFF;
    padding:1.5em;
}
ul.pr_review_pro {
    list-style-image: url("/wp-content/themes/Newspaper-child/svg/pro.svg");
}
ul.pr_review_con {
    list-style-image: url("/wp-content/themes/Newspaper-child/svg/con.svg");
}
ul.pr_review_collection-list {
    list-style-image: url("/wp-content/themes/Newspaper-child/svg/pro.svg");
}
li {
    font-size:1.125em;
    line-height: 1.5;
    padding:.5em;
}
.pr_review_cta {
    margin: 2em auto 1em auto;
    background: rgb(0,193,190);
    color: #FFF;
    padding: 1em;
    font-size: 1.5em;
    display: block;
    width: 300px;
    text-align: center;
}
.pr_review_overall-rating h1 {
    margin:auto;line-height:100px;text-align:center;color:rgb(0,193,190);
    font-size:1.5em
}
.pr_review_product {
    display:none;
}
@media screen and (min-width:768px){
    .pr_review_wrap_responsive {
        display:flex;
    }
    .pr_review_overall-rating h1 {
        line-height:220px;
        font-size:3em
    }
    .pr_review_product {
        margin-top: -350px;
    margin-left: -100px;
    width: 180%;
    display:block;
    }
}
</style>

<div class="pr_review_stripe" style="background-image:url('https://www.nutritionrealm.com/wp-content/uploads/2019/05/Header-Image.jpg');">
    <div class="pr_review_wrap">
        <div class="pr_review_column-50">
            <div class="pr_review_content" style="color:#FFF">
            <img src="https://www.nutritionrealm.com/wp-content/uploads/2019/05/GR-logo-white.png" alt="Green Roads" style="width:200px;">
            <h1 style="color:#FFF">What is <strong>Green Roads</strong>?</h1>
            <p>Green Roads, based out of Deerfield Beach, Florida, is a manufacturer and retailer of some of the highest quality, pharmacist-formulated hemp products on the market. Their merchandise is sold in more than 10,000 locations nationwide.  Green Roads is driven by its mission to help customers live their best and healthiest lives. The company has been named the #1 privately held hemp company in the U.S. and has won multiple awards over the years. </p>
            <a href="https://greenroadsworld.com/?rfsn=796298.16944d" class="pr_review_cta">View Green Roads' Website</a>
        </div>
        </div>
        <div class="pr_review_column-50"></div>
    </div>
</div>

<div class="pr_review_stripe">
    <div class="pr_review_wrap pr_review_wrap_responsive">
        <div class="pr_review_column-70">
            <div class="pr_review_content">
                <h1>What makes <strong>Green Roads</strong> unique?</h1>
                <p>Green Roads prides itself on delivering quality products that contain both pure and potent ingredients. All of their products go through multi-stage, third-party lab testing and include QR codes linked to the lab results on every package. Their transparency and commitment to customers make the Green Roads brand one of the most recognized and trusted brands sold in the industry. </p>
            </div>
        </div>
        <div class="pr_review_column-30">
            <div class="pr_review_product">
                <img src="https://www.nutritionrealm.com/wp-content/uploads/2019/05/grterpenes.png" alt="Green Roads' Terpenes">
            </div>
        </div>
    </div>
</div>

<div class="pr_review_stripe" style="background-image:url('https://www.nutritionrealm.com/wp-content/uploads/2019/05/Video-Image.jpg');margin-bottom:4em;">
    <div class="pr_review_content" style="height:380px;">
    <a href="https://greenroadsworld.com/?rfsn=796298.16944d" class="pr_review_cta" style="margin-top:4em;font-weight:bold">Shop Green Roads Products</a>
    </div>
</div>

<div class="pr_review_stripe">
    <div class="pr_review_wrap">
    <div class="pr_review_column-50">
        <div class="pr_review_content">
        <h2>Quality (and transparency)</h2>
        <p>In 2018, Green Roads was awarded the Best Hemp Product from the Cannabis Business Awards for its quality, authenticity, transparency, and accurate labeling of products. They provide information on the website where they detail every ingredient that is used in the formulation of their hemp products. As previously mentioned, each product also contains a QR code that when scanned directs you to the lab report from the scanned item. </p>
        <p>All Green Roads hemp comes from hand-selected farms across the U.S., including farms in Kentucky, Colorado, Oregon, California, and Nevada. Although hemp farms are not currently certified organic in the U.S., the farms all follow organic principles and procedures. The Co2 extraction method they use falls in line with the industry standard for safe and clean products. In addition, all Green Roads finished products are tested against pesticides, solvents, and metals. When testing the Green Roads hemp oil, we found excellent viscosity, texture, and consistency in the oil. </p>
        </div>
    </div>
    <div class="pr_review_column-50" style="background-image:url('https://www.nutritionrealm.com/wp-content/uploads/2019/05/GREENROADS__Fruit_Bites_Spring10-1.jpg');">
    </div>
    </div>
</div>

<div class="pr_review_stripe">
    <div class="pr_review_wrap">
    <div class="pr_review_column-50" style="background-image:url('https://www.nutritionrealm.com/wp-content/uploads/2019/05/JAA8765.jpg');">
    </div>
    <div class="pr_review_column-50">
        <div class="pr_review_content">
        <h2>Price</h2>
        <p>In comparison to other leading hemp brands on the market, Green Roads is on the pricier end of the spectrum. The company justified its price by reiterating the quality of their ingredients and the extensive testing they put their products through. </p>
        <p>The company offers a Beginners Bundle on the website at a discounted price of $100, which is great for those who are new to the world of hemp and would like to see what the hype is all about. The bundle includes a Daily Dose 7-Day Pack, Sleepy Z’s, Muscle & Joint Heat Relief Roll-On, and Relax Bears Gummies — this is a great bang for your buck!</p>
        <p>In case you’re still a little reluctant to commit, you also have the option of buying from their selection of Hemp On-The-Go gummies for as little as $4.99 or a Hemp Daily Dose prefilled dropper for $6.99. </p>
        <p>A more in-depth price breakdown of Green Roads hemp oil: </p>
        <table border="0" style="border:0; padding:5px;">
        <tr>
            <td>100 MG</td>
            <td>$26.99</td>
            <td>$0.26 per MG</td>
        </tr>
        <tr>
            <td>250 MG</td>
            <td>$45.99</td>
            <td>$0.18 per MG</td>
        </tr>
        <tr>
            <td>350 MG</td>
            <td>$64.99</td>
            <td>$0.19 per MG</td>
        </tr>
        <tr>
            <td>550 MG</td>
            <td>$84.99</td>
            <td>$0.15 per MG</td>
        </tr>
        <tr>
            <td>1000 MG</td>
            <td>$162.99</td>
            <td>$0.16 per MG</td>
        </tr>
        <tr>
            <td>1500 MG</td>
            <td>$209.99</td>
            <td>$0.14 per MG</td>
        </tr>
        <tr>
            <td>3500 MG</td>
            <td>$215</td>
            <td>$0.06 per MG</td>
        </tr>
        </table>

    </div>
        </div>
    </div>
</div>

<div class="pr_review_stripe">
    <div class="pr_review_wrap">
    <div class="pr_review_column-50">
        <div class="pr_review_content">
        <h2>Flavor</h2>
        <p>When it comes to flavor, Green Roads has perfected the taste of their edibles, syrups, and on-the-go collection of relax bears, fruit bites, and relief toads, and froggies. However, where some competitors offer mint or lemon-flavored hemp oil, Green Roads doesn’t. Their oil is not infused with any additional flavoring, so you might have a subtle hemp aftertaste in your mouth when using the oil. If you’d rather ease your way into the natural taste of hemp, you might want to opt for their selection of edibles, hemp coffee, and hemp tea products. </p>
        </div>
    </div>
    <div class="pr_review_column-50" style="background-image:url('https://www.nutritionrealm.com/wp-content/uploads/2019/05/GR_Photoshoot2_Spring-53.jpg');">
    </div>
    </div>
</div>

<div class="pr_review_stripe">
    <div class="pr_review_wrap">
    <div class="pr_review_column-50" style="background-image:url('https://www.nutritionrealm.com/wp-content/uploads/2019/05/GR_Photoshoot2_Spring-129.jpg')">
    </div>
    <div class="pr_review_column-50">
        <div class="pr_review_content">
        <h2>Customer Service</h2>
        <p>If you visit the Green Roads website on any given day, you will find that their customer service representatives are quick to answer any questions you might have. The average time for a response on the live chat is approximately one minute. </p>
        <p>They also have a helpful <a href="https://www.greenroadsworld.com/pages/faqs/">FAQ</a> page where you can get your basic hemp questions answered. Unlike many company websites these days, Green Roads provides a direct line where they can be reached for any customer services-related inquiries. So, whether or not they’re your hemp brand of choice, Green Roads is readily available to answer your questions about both the industry and the Green Roads brand. </p>

        </div>
     </div>
    </div>
</div>

<div class="pr_review_stripe" style="background:rgb(228,234,241);">
    <div class="pr_review_content" style="padding:2em 2em 1em 2em;">
        <h1 style="text-align:center;">Our <strong>Green Roads</strong> Rating</h1>
    </div>
    <div class="pr_review_wrap pr_review_wrap_responsive">
        <div class="pr_review_column-50">
            <div class="pr_review_content" style="padding:1em 2em;background:#FFF;">
                <div class="pr_review_wrap">
                    <div class="pr_review_column-70" style="width:60%;padding:0">
                        <img style="width:100%;text-align:center;margin:0 auto;" src="https://www.nutritionrealm.com/wp-content/uploads/2019/05/GR-logo.png" alt="Green Roads">
                        <div style="text-align:center;width:100%">
                            <svg style="width:10%;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 797.07 757.29"><defs><style>.cls-1{fill:#10cfc9;}</style></defs><title>Asset 6</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M762.39,258.19l-219.5-20.76a38,38,0,0,1-31.45-23.27L432.82,23.59c-12.58-31.45-57.24-31.45-69.82,0L285,214.16c-5,13.21-17.61,22-31.45,23.27L34.06,258.19c-32.71,3.14-45.92,44-21.39,66L178.09,469.52A37.61,37.61,0,0,1,190,506.62L140.35,710.4c-7.55,32.08,27.05,58.49,56,41.52l183-107.56a38.05,38.05,0,0,1,38.37,0l183,107.56c28.93,17,63.53-8.81,56-41.52L607.66,506.62a37.61,37.61,0,0,1,12-37.1L785,324.23C808.93,302.21,795.09,261.33,762.39,258.19Z"/></g></g></svg>
                        <svg style="width:10%;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 797.07 757.29"><defs><style>.cls-1{fill:#10cfc9;}</style></defs><title>Asset 6</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M762.39,258.19l-219.5-20.76a38,38,0,0,1-31.45-23.27L432.82,23.59c-12.58-31.45-57.24-31.45-69.82,0L285,214.16c-5,13.21-17.61,22-31.45,23.27L34.06,258.19c-32.71,3.14-45.92,44-21.39,66L178.09,469.52A37.61,37.61,0,0,1,190,506.62L140.35,710.4c-7.55,32.08,27.05,58.49,56,41.52l183-107.56a38.05,38.05,0,0,1,38.37,0l183,107.56c28.93,17,63.53-8.81,56-41.52L607.66,506.62a37.61,37.61,0,0,1,12-37.1L785,324.23C808.93,302.21,795.09,261.33,762.39,258.19Z"/></g></g></svg>
                        <svg style="width:10%;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 797.07 757.29"><defs><style>.cls-1{fill:#10cfc9;}</style></defs><title>Asset 6</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M762.39,258.19l-219.5-20.76a38,38,0,0,1-31.45-23.27L432.82,23.59c-12.58-31.45-57.24-31.45-69.82,0L285,214.16c-5,13.21-17.61,22-31.45,23.27L34.06,258.19c-32.71,3.14-45.92,44-21.39,66L178.09,469.52A37.61,37.61,0,0,1,190,506.62L140.35,710.4c-7.55,32.08,27.05,58.49,56,41.52l183-107.56a38.05,38.05,0,0,1,38.37,0l183,107.56c28.93,17,63.53-8.81,56-41.52L607.66,506.62a37.61,37.61,0,0,1,12-37.1L785,324.23C808.93,302.21,795.09,261.33,762.39,258.19Z"/></g></g></svg>
                        <svg style="width:10%;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 797.07 757.29"><defs><style>.cls-1{fill:#10cfc9;}</style></defs><title>Asset 6</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M762.39,258.19l-219.5-20.76a38,38,0,0,1-31.45-23.27L432.82,23.59c-12.58-31.45-57.24-31.45-69.82,0L285,214.16c-5,13.21-17.61,22-31.45,23.27L34.06,258.19c-32.71,3.14-45.92,44-21.39,66L178.09,469.52A37.61,37.61,0,0,1,190,506.62L140.35,710.4c-7.55,32.08,27.05,58.49,56,41.52l183-107.56a38.05,38.05,0,0,1,38.37,0l183,107.56c28.93,17,63.53-8.81,56-41.52L607.66,506.62a37.61,37.61,0,0,1,12-37.1L785,324.23C808.93,302.21,795.09,261.33,762.39,258.19Z"/></g></g></svg>
                        <svg style="width:10%;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 797.07 757.21"><defs><style>.cls-1{fill:#10cfc9;}.cls-2{fill:#eaeaea;}</style></defs><title>Asset 5</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M398.53,0A37,37,0,0,0,363,23.57L285,214.14c-5,13.21-17.61,22-31.45,23.27L34.06,258.17c-32.71,3.14-45.92,44-21.39,66L178.09,469.5A37.62,37.62,0,0,1,190,506.61L140.35,710.38c-7.55,32.09,27.05,58.5,56,41.52l183-107.56a38.23,38.23,0,0,1,19.18-5.19Z"/><path class="cls-2" d="M398.53,0a37.05,37.05,0,0,1,35.54,23.57l78,190.57c5,13.21,17.61,22,31.44,23.27L763,258.17c32.71,3.14,45.91,44,21.38,66L619,469.5a37.6,37.6,0,0,0-12,37.11l49.69,203.77c7.54,32.09-27.05,58.5-56,41.52l-183-107.56a38.18,38.18,0,0,0-19.18-5.19Z"/></g></g></svg>
                        </div>
                    </div>
                    <div class="pr_review_column-30" style="width:40%">
                        <div class="pr_review_overall-rating" style="background-position:center;width:100%;height:100%;background-image:url(https://www.nutritionrealm.com/wp-content/uploads/2019/05/TFC19-NR-Rating-Icons-01.png);background-size:contain;background-repeat:no-repeat">
                            <h1>4.8</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pr_review_content" style="padding:1em 2.5em 3em 2.5em;background:#FFF;">
                <h2><strong>Green Roads</strong> Detailed Rating</h2>
                <h3>Quality <span style="float:right;">5.0</span></h3>
                <div class="pr_review_wrap" style="justify-content:space-between;">
                    <div class="rating_bar" style="width:18%;background:rgb(0,193,190);height:15px;"></div>
                    <div class="rating_bar" style="width:18%;background:rgb(0,193,190);height:15px;"></div>
                    <div class="rating_bar" style="width:18%;background:rgb(0,193,190);height:15px;"></div>
                    <div class="rating_bar" style="width:18%;background:rgb(0,193,190);height:15px;"></div>
                    <div class="rating_bar" style="width:18%;background:rgb(0,193,190);height:15px;"></div>
                </div>
                <h3>Price <span style="float:right;">5.0</span></h3>
                <div class="pr_review_wrap" style="justify-content:space-between;">
                    <div class="rating_bar" style="width:18%;background:rgb(0,193,190);height:15px;"></div>
                    <div class="rating_bar" style="width:18%;background:rgb(0,193,190);height:15px;"></div>
                    <div class="rating_bar" style="width:18%;background:rgb(0,193,190);height:15px;"></div>
                    <div class="rating_bar" style="width:18%;background:rgb(0,193,190);height:15px;"></div>
                    <div class="rating_bar" style="width:18%;background:rgb(0,193,190);height:15px;"></div>
                </div>
                <h3>Flavor <span style="float:right;">4.8</span></h3>
                <div class="pr_review_wrap" style="justify-content:space-between;">
                    <div class="rating_bar" style="width:18%;background:rgb(0,193,190);height:15px;"></div>
                    <div class="rating_bar" style="width:18%;background:rgb(0,193,190);height:15px;"></div>
                    <div class="rating_bar" style="width:18%;background:rgb(0,193,190);height:15px;"></div>
                    <div class="rating_bar" style="width:18%;background:rgb(0,193,190);height:15px;"></div>
                    <div class="rating_bar" style="width:18%;background:#EEE;height:15px;">
                        <div class="rating_bar" style="width:80%;background:rgb(0,193,190);height:15px;"></div>
                    </div>
                </div>
                <h3>Customer Service <span style="float:right;">5.0</span></h3>
                <div class="pr_review_wrap" style="justify-content:space-between;">
                    <div class="rating_bar" style="width:18%;background:rgb(0,193,190);height:15px;"></div>
                    <div class="rating_bar" style="width:18%;background:rgb(0,193,190);height:15px;"></div>
                    <div class="rating_bar" style="width:18%;background:rgb(0,193,190);height:15px;"></div>
                    <div class="rating_bar" style="width:18%;background:rgb(0,193,190);height:15px;"></div>
                    <div class="rating_bar" style="width:18%;background:rgb(0,193,190);height:15px;"></div>
                </div>
            </div>
        </div>
        <div class="pr_review_column-30">
            <div style="background:#FFF;padding:1em 2em;">
            <h2 style="font-weight: bold">Pros</h2>
            <ul class="pr_review_pro">
                <li>Wide variety of hemp products</li>
                <li>Pharmacist-formulated</li>
                <li>Products tested by third-party laboratories</li>
                <li>Excellent customer service</li>
            </ul>
            <h2 style="font-weight: bold">Cons</h2>
            <ul class="pr_review_con">
                <li>No international shipping</li>
                <li>Hemp not yet approved by FDA</li>
            </ul>
            </div>
            </div>
    </div>
</div>

<div class="pr_review_stripe">
    <div class="pr_review_content" style="padding-bottom:.5em;padding-top:2em;">
        <h1 style="text-align:center;"><strong>Green Roads</strong> Customer Ratings</h1>
    </div>
    <div class="pr_review_wrap pr_review_wrap_responsive">
        <div class="pr_review_column-30">
            <div class="pr_review_content" style="padding-bottom:0;padding-top:0;">
            <p>My husband has been using hemp oil to help with his metastatic prostate cancer. It does help with pain control probably due to decreased inflammation. Interestingly, his PSA decreased for several months. It is increasing again now. I wish we had known to try hemp oil immediately after chemotherapy as the effect may have lasted longer.</p>
            <h5 style="margin:0;">★★★★★</h5><h4 style="margin-top:0;">Ann S.</h4>
            </div>
        </div>
        <div class="pr_review_column-30">
            <div class="pr_review_content" style="padding-bottom:0;padding-top:0;">
            <p>Very happy with our purchase. The gummies taste great and are helpful with sleep. Shipping was easy and arrived perfectly.</p>
            <h5 style="margin:0;">★★★★★</h5><h4 style="margin-top:0;">Christina T.</h4>
            </div>
        </div>
        <div class="pr_review_column-30">
            <div class="pr_review_content" style="padding-bottom:0;padding-top:0;">
            <p>I’ve had a chronic cough for years. Went through all the respiratory testing, steroids and antibiotics all with no success. After several weeks of high dose hemp, it is significantly better. I’m sticking with it!!!</p>
            <h5 style="margin:0;">★★★★★</h5><h4 style="margin-top:0;">Jennifer W.</h4>
            </div>
        </div>
    </div>
</div>

<div class="pr_review_stripe" style="background:rgb(228,234,241);">
<div class="pr_review_content" style="padding:2.5em 0 1em 0">
    <h1 style="text-align:center;"><strong>Green Roads</strong> Collections</h1>
    <div class="pr_review_wrap pr_review_wrap_responsive">
        <div class="pr_review_column-30" style="background:#FFF;max-width:450px;">
            <div class="pr_review_content" style="padding-bottom:0;padding-top:0;">
                <img src="https://www.nutritionrealm.com/wp-content/uploads/2019/04/DSC08648-1.jpg" alt="Green Roads" style="float:left;width:40%">
                <ul class="pr_review_collection-list" style="margin-left:45%">
                <li>Hemp Oils</li>
                <li>Hemp Edibles</li>
                <li>Hemp Bundles</li>
                <li>Hemp Capsules</li>
                <li>Hemp Terpenes</li>
                <li>Hemp Sublingual</li>
                </ul>
            </div>
        </div>
        <div class="pr_review_column-30" style="background:#FFF;max-width:450px;">
            <div class="pr_review_content" style="padding-bottom:0;padding-top:0;">
                <img src="https://www.nutritionrealm.com/wp-content/uploads/2019/04/GREENROADS_Winter-68-1.jpg" alt="Green Roads" style="float:left;width:40%">
            <ul class="pr_review_collection-list" style="margin-left:45%">
                <li>Hemp Pain Creams</li>
                <li>Hemp On-The-Go</li>
                <li>Hemp Daily Doses</li>
                <li>Hemp Syrups</li>
                <li>Hemp Oil for Pets</li>
                <li>Hemp Concentrates</li>
            </ul>
            </div>
        </div>
    </div>
</div>
</div>

<div class="pr_review_stripe">
<div class="pr_review_content">
<h1 style="margin:0 auto;max-width:500px; text-align:center;">CLICK BELOW TO SHOP <strong>GREEN ROADS</strong></h1>
<a href="https://greenroadsworld.com/?rfsn=796298.16944d" class="pr_review_cta">View Green Roads' Website</a>
</div>
</div>

<?php

get_footer();
