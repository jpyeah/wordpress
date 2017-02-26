<?php
/*
*Template Name: ordercreate
*/

get_header();
 ?>
        <div class="container">
            <div class="row">
                <div class="col-md-2 hidden-xs"></div>
                <div class="col-md-8 col-xs-12">
                    <h3 class="order-title">立即下单，获得拍片解决方案</h3>
                    <div class="order-box">
                        <div class="row">
                            <div class="col-md-3 col-xs-12">
                                <label class="hidden-xs" style="display: block;text-align: right;line-height: 30px">类型</label>
                                <label class="hidden-lg hidden-md hidden-sm" style="display: block;line-height: 30px">类型</label>
                            </div>
                            <div class="col-md-7 col-xs-12">
                                <select class="form-control" style="margin-bottom: 10px;">
                                <option>动画</option>
                                <option>短片</option>
                                <option>电影</option>
                                <option>MV</option>
                                <option>视频剪辑</option>
                            </select>
                                <select class="form-control">
                                <option>简单动画</option>
                                <option>复杂动画</option>
                                <option>特效制作</option>
                            </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-xs-12">
                                <label class="hidden-xs" style="display: block;text-align: right;line-height: 30px">时长</label>
                                <label class="hidden-lg hidden-md hidden-sm" style="display: block;line-height: 30px">时长</label>
                            </div>
                            <div class="col-md-7 col-xs-12">
                                <div class="setup-box">
                                    <div class="line-box">
                                        <div class="line"></div>
                                        <ul>
                                            <li></li>
                                            <li class="active"></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                    <div class="line-info">
                                        <ul>
                                            <li>0min</li>
                                            <li>1min</li>
                                            <li>1.5min</li>
                                            <li>3min</li>
                                            <li>5min</li>
                                            <li>8min</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 30px;">
                            <div class="col-md-3 col-xs-12">
                                <label class="hidden-xs" style="display: block;text-align: right;line-height: 30px">画质</label>
                                <label class="hidden-lg hidden-md hidden-sm" style="display: block;line-height: 30px">画质</label>
                            </div>
                            <div class="col-md-7 col-xs-12">
                                <select class="form-control" style="margin-bottom: 10px;">
                                <option>1080</option>
                                <option>720</option>
                                <option>480</option>
                            </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-xs-12">
                                <label class="hidden-xs" style="display: block;text-align: right;line-height: 30px">后期</label>
                                <label class="hidden-lg hidden-md hidden-sm" style="display: block;line-height: 30px">后期</label>
                            </div>
                            <div class="col-md-7 col-xs-12">
                                <select class="form-control" style="margin-bottom: 10px;">
                                    <option>视频后期</option>
                                    <option>音频后期</option>
                                    <option>动画后期</option>
                                </select>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> 配音/乐
                                     </label>
                                     <label>
                                        <input type="checkbox"> 陆棚
                                     </label>
                                     <label>
                                        <input type="checkbox"> 原创音乐制作
                                     </label>
                                     <label>
                                        <input type="checkbox"> 和声
                                     </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-xs-12">
                                <label class="hidden-xs" style="display: block;text-align: right;line-height: 30px">风格</label>
                                <label class="hidden-lg hidden-md hidden-sm" style="display: block;line-height: 30px">风格</label>
                            </div>
                            <div class="col-md-7 col-xs-12">
                                <textarea  placeholder="添加风格"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-xs-12">
                                <label class="hidden-xs" style="display: block;text-align: right;line-height: 30px">补充</label>
                                <label class="hidden-lg hidden-md hidden-sm" style="display: block;line-height: 30px">补充</label>
                            </div>
                            <div class="col-md-7 col-xs-12">
                                <textarea  placeholder="添加补充"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 hidden-xs"></div>
            </div>
            <div class="row">
                <div class="col-md-4 hidden-xs"></div>
                <div class="col-md-4 col-xs-12">
                    <button class="create-order">下单开工</button>
                </div>
                <div class="col-md-4 hidden-xs"></div>
            </div>
        </div>
<?php wp_footer(); ?>
</body>
<?php wp_enqueue_scripts('jquery-js'); ?>
<?php wp_enqueue_scripts('bootstrap-js'); ?>

</html>