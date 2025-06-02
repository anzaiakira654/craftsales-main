<section id="com_sec02">
    <div class="section_title t_left">
        <h2>会社情報</h2>
    </div>
    <div class="sec_main">
        <div class="text">
            <table class="company-profile">
                <tr>
                    <th><p>会社名</p></th>
                    <td><p><?php the_field('company_name'); ?></p></td>
                </tr>
                <tr>
                    <th><p>所在地</p></th>
                    <td><p><?php the_field('president_name'); ?></p></td>
                </tr>
                <tr>
                    <th><p>代表者名</p></th>
                    <td><p><?php the_field('company_address'); ?></p></td>
                </tr>
                <tr>
                    <th><p>設立年月日</p></th>
                    <td><p><?php the_field('company_year'); ?></p></td>
                </tr>
                <tr>
                    <th><p>資本金</p></th>
                    <td><p><?php the_field('company_capital'); ?></p></td>
                </tr>
                <tr>
                    <th><p>事業内容</p></th>
                    <td><p><?php the_field('business_name'); ?></p></td>
                </tr>
                <tr>
                    <th><p>取引銀行</p></th>
                    <td><p><?php the_field('company_bank'); ?></p></td>
                </tr>
                <tr>
                    <th><p>従業員数</p></th>
                    <td><p><?php the_field('company_employees'); ?></p></td>
                </tr>
                <tr>
                    <th><p>主要取引先</p></th>
                    <td><p><?php the_field('company_clients'); ?></p></td>
                </tr>
                <tr>
                    <th><p>電話番号</p></th>
                    <td><p><?php the_field('company_call'); ?></p></td>
                </tr>
                <tr>
                    <th><p>FAX番号</p></th>
                    <td><p><?php the_field('company_fax'); ?></p></td>
                </tr>
            </table>
        </div>
        <div class="img flex">
            <div>
                <img src="<?php the_field('company_img02'); ?>" >
            </div>
            <div>
                <img src="<?php the_field('company_img03'); ?>" >
            </div>
        </div>
    </div>
</section>