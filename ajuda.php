<?php require('header.php'); ?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Ajuda</a>
            </li>
        </ul>
    </div>

    <div class="row">
        <div class="box col-md-12 tour">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-globe"></i> Ajuda</h2>

                    <div class="box-icon">
                        <a href="#" class="btn btn-setting btn-round btn-default"><i
                                class="glyphicon glyphicon-cog"></i></a>
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                class="glyphicon glyphicon-chevron-up"></i></a>
                        <a href="#" class="btn btn-close btn-round btn-default"><i
                                class="glyphicon glyphicon-remove"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <a href="tour.php">Click Here to restart the tour</a><br>
                    You can create Custom Tour, like this. <br> For more help on implementing tour go <a
                        href="http://bootstraptour.com/" target="_blank">here</a>
                </div>
            </div>
        </div>
        <div class="box col-md-12">
        <div class="box-inner">
        <div class="box-header well">
            <h2><i class="glyphicon glyphicon-picture"></i> Icons</h2>

            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round btn-default"><i
                        class="glyphicon glyphicon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
        <section id="icons1">

        <div class="row">

            <div class="col-md-6">
                <h3>How to use</h3>

                <p>Bootstrap uses an <code>&lt;i&gt;</code> tag for all icons, but they have no case class—only a shared
                    prefix. To use, place the following code just about anywhere:</p>
                <pre class="prettyprint linenums">&lt;i class="glyphicon glyphicon-search"&gt;&lt;/i&gt;</pre>



                <p>
                    <span class="label-info label label-default">Heads up!</span>
                    When using beside strings of text, as in buttons or nav links, be sure to leave a space after the
                    <code>&lt;i&gt;</code> tag for proper spacing.
                </p>
            </div>
            <div class="col-md-6">
                <h3>Use cases</h3>

                <p>Icons are great, but where would one use them? Here are a few ideas:</p>
                <ul>
                    <li>As visuals for your sidebar navigation</li>
                    <li>For a purely icon-driven navigation</li>
                    <li>For buttons to help convey the meaning of an action</li>
                    <li>With links to share context on a user's destination</li>
                </ul>
                <p>Essentially, anywhere you can put an <code>&lt;i&gt;</code> tag, you can put an icon.</p>
            </div>
        </div>

        <h3>Examples</h3>

        <p>Use them in buttons, button groups for a toolbar, navigation, or prepended form inputs.</p>

        <div class="row">
            <div class="col-md-4">
                <div style="font-size: 50px">
                    <h5>Big-Color Icons</h5>
                    <span><i class="glyphicon glyphicon-tint"></i></span>
                    <span><i class="glyphicon glyphicon-star yellow"></i></span>
                    <span><i class="glyphicon glyphicon-calendar red"></i></span>
                    <span><i class="glyphicon glyphicon-bell blue"></i></span>
                    <span><i class="glyphicon glyphicon-camera green"></i></span>
                </div>

                <div class="btn-toolbar">
                    <div class="btn-group">
                        <a class="btn btn-default" href="#"><i class="glyphicon glyphicon-align-left"></i></a>
                        <a class="btn btn-default" href="#"><i class="glyphicon glyphicon-align-center"></i></a>
                        <a class="btn btn-default" href="#"><i class="glyphicon glyphicon-align-right"></i></a>
                        <a class="btn btn-default" href="#"><i class="glyphicon glyphicon-align-justify"></i></a>
                    </div>
                    <div class="btn-group">
                        <a class="btn btn-primary" href="#"><i class="glyphicon glyphicon-user icon-white"></i> User</a>
                        <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span
                                class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="glyphicon glyphicon-pencil"></i> Edit</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-trash"></i> Delete</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-ban-circle"></i> Ban</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="i"></i> Make admin</a></li>
                        </ul>

                    </div>
                </div>

                <br>

                <p>
                    <a class="btn btn-default" href="#"><i class="glyphicon glyphicon-refresh"></i> Refresh</a>
                    <a class="btn btn-success" href="#"><i class="glyphicon glyphicon-shopping-cart"></i>
                        Checkout</a>
                    <a class="btn btn-danger" href="#"><i class="glyphicon glyphicon-trash"></i> Delete</a>
                </p>

                <p>
                    <a class="btn btn-default btn-lg" href="#"><i class="glyphicon glyphicon-comment"></i> Comment</a>
                    <a class="btn btn-default btn-sm" href="#"><i class="glyphicon glyphicon-cog"></i> Settings</a>
                    <a class="btn btn-info btn-sm" href="#"><i class="glyphicon glyphicon-info-sign"></i> More
                        Info</a>
                </p>
            </div>
            <div class="col-md-4">
                <div class="well">
                    <ul class="nav nav-list">
                        <li class="active"><a href="#"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-book"></i> Library</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-pencil"></i> Applications</a></li>
                        <li><a href="#"><i class="i"></i> Misc</a></li>
                    </ul>
                </div>
                <!-- /well -->
            </div>
            <div class="col-md-4">
                <form>
                    <div class="form-group">
                        <label class="control-label" for="inputIcon">Email address</label>

                        <div class="input-group input-group-lg">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope red"></i></span>
                            <input id="inputIcon" type="text" class="form-control" placeholder="Username">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="page-header">
            <h1>Icons</h1>
        </div>
        <div class="row bs-icons">
            <div class="col-md-3">
                <ul class="the-icons">
                    <li><i class="glyphicon glyphicon-glass"></i> glyphicon glyphicon-glass</li>
                    <li><i class="glyphicon glyphicon-music"></i> glyphicon glyphicon-music</li>
                    <li><i class="glyphicon glyphicon-search"></i> glyphicon glyphicon-search</li>
                    <li><i class="glyphicon glyphicon-envelope"></i> glyphicon glyphicon-envelope</li>
                    <li><i class="glyphicon glyphicon-heart"></i> glyphicon glyphicon-heart</li>
                    <li><i class="glyphicon glyphicon-star"></i> glyphicon glyphicon-star</li>
                    <li><i class="glyphicon glyphicon-star-empty"></i> glyphicon glyphicon-star-empty</li>
                    <li><i class="glyphicon glyphicon-user"></i> glyphicon glyphicon-user</li>
                    <li><i class="glyphicon glyphicon-film"></i> glyphicon glyphicon-film</li>
                    <li><i class="glyphicon glyphicon-th-large"></i> glyphicon glyphicon-th-large</li>
                    <li><i class="glyphicon glyphicon-th"></i> glyphicon glyphicon-th</li>
                    <li><i class="glyphicon glyphicon-th-list"></i> glyphicon glyphicon-th-list</li>
                    <li><i class="glyphicon glyphicon-ok"></i> glyphicon glyphicon-ok</li>
                    <li><i class="glyphicon glyphicon-remove"></i> glyphicon glyphicon-remove</li>
                    <li><i class="glyphicon glyphicon-zoom-in"></i> glyphicon glyphicon-zoom-in</li>
                    <li><i class="glyphicon glyphicon-zoom-out"></i> glyphicon glyphicon-zoom-out</li>
                    <li><i class="glyphicon glyphicon-off"></i> glyphicon glyphicon-off</li>
                    <li><i class="glyphicon glyphicon-signal"></i> glyphicon glyphicon-signal</li>
                    <li><i class="glyphicon glyphicon-cog"></i> glyphicon glyphicon-cog</li>
                    <li><i class="glyphicon glyphicon-trash"></i> glyphicon glyphicon-trash</li>
                    <li><i class="glyphicon glyphicon-home"></i> glyphicon glyphicon-home</li>
                    <li><i class="glyphicon glyphicon-file"></i> glyphicon glyphicon-file</li>
                    <li><i class="glyphicon glyphicon-time"></i> glyphicon glyphicon-time</li>
                    <li><i class="glyphicon glyphicon-road"></i> glyphicon glyphicon-road</li>
                    <li><i class="glyphicon glyphicon-download-alt"></i> glyphicon glyphicon-download-alt</li>
                    <li><i class="glyphicon glyphicon-download"></i> glyphicon glyphicon-download</li>
                    <li><i class="glyphicon glyphicon-upload"></i> glyphicon glyphicon-upload</li>
                    <li><i class="glyphicon glyphicon-inbox"></i> glyphicon glyphicon-inbox</li>
                    <li><i class="glyphicon glyphicon-play-circle"></i> glyphicon glyphicon-play-circle</li>
                    <li><i class="glyphicon glyphicon-repeat"></i> glyphicon glyphicon-repeat</li>
                    <li><i class="glyphicon glyphicon-refresh"></i> glyphicon glyphicon-refresh</li>
                    <li><i class="glyphicon glyphicon-list-alt"></i> glyphicon glyphicon-list-alt</li>
                    <li><i class="glyphicon glyphicon-lock"></i> glyphicon glyphicon-lock</li>
                    <li><i class="glyphicon glyphicon-flag"></i> glyphicon glyphicon-flag</li>
                    <li><i class="glyphicon glyphicon-headphones"></i> glyphicon glyphicon-headphones</li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="the-icons">
                    <li><i class="glyphicon glyphicon-volume-off"></i> glyphicon glyphicon-volume-off</li>
                    <li><i class="glyphicon glyphicon-volume-down"></i> glyphicon glyphicon-volume-down</li>
                    <li><i class="glyphicon glyphicon-volume-up"></i> glyphicon glyphicon-volume-up</li>
                    <li><i class="glyphicon glyphicon-qrcode"></i> glyphicon glyphicon-qrcode</li>
                    <li><i class="glyphicon glyphicon-barcode"></i> glyphicon glyphicon-barcode</li>
                    <li><i class="glyphicon glyphicon-tag"></i> glyphicon glyphicon-tag</li>
                    <li><i class="glyphicon glyphicon-tags"></i> glyphicon glyphicon-tags</li>
                    <li><i class="glyphicon glyphicon-book"></i> glyphicon glyphicon-book</li>
                    <li><i class="glyphicon glyphicon-bookmark"></i> glyphicon glyphicon-bookmark</li>
                    <li><i class="glyphicon glyphicon-print"></i> glyphicon glyphicon-print</li>
                    <li><i class="glyphicon glyphicon-camera"></i> glyphicon glyphicon-camera</li>
                    <li><i class="glyphicon glyphicon-font"></i> glyphicon glyphicon-font</li>
                    <li><i class="glyphicon glyphicon-bold"></i> glyphicon glyphicon-bold</li>
                    <li><i class="glyphicon glyphicon-italic"></i> glyphicon glyphicon-italic</li>
                    <li><i class="glyphicon glyphicon-text-height"></i> glyphicon glyphicon-text-height</li>
                    <li><i class="glyphicon glyphicon-text-width"></i> glyphicon glyphicon-text-width</li>
                    <li><i class="glyphicon glyphicon-align-left"></i> glyphicon glyphicon-align-left</li>
                    <li><i class="glyphicon glyphicon-align-center"></i> glyphicon glyphicon-align-center</li>
                    <li><i class="glyphicon glyphicon-align-right"></i> glyphicon glyphicon-align-right</li>
                    <li><i class="glyphicon glyphicon-align-justify"></i> glyphicon glyphicon-align-justify</li>
                    <li><i class="glyphicon glyphicon-list"></i> glyphicon glyphicon-list</li>
                    <li><i class="glyphicon glyphicon-indent-left"></i> glyphicon glyphicon-indent-left</li>
                    <li><i class="glyphicon glyphicon-indent-right"></i> glyphicon glyphicon-indent-right</li>
                    <li><i class="glyphicon glyphicon-facetime-video"></i> glyphicon glyphicon-facetime-video</li>
                    <li><i class="glyphicon glyphicon-picture"></i> glyphicon glyphicon-picture</li>
                    <li><i class="glyphicon glyphicon-pencil"></i> glyphicon glyphicon-pencil</li>
                    <li><i class="glyphicon glyphicon-map-marker"></i> glyphicon glyphicon-map-marker</li>
                    <li><i class="glyphicon glyphicon-adjust"></i> glyphicon glyphicon-adjust</li>
                    <li><i class="glyphicon glyphicon-tint"></i> glyphicon glyphicon-tint</li>
                    <li><i class="glyphicon glyphicon-edit"></i> glyphicon glyphicon-edit</li>
                    <li><i class="glyphicon glyphicon-share"></i> glyphicon glyphicon-share</li>
                    <li><i class="glyphicon glyphicon-check"></i> glyphicon glyphicon-check</li>
                    <li><i class="glyphicon glyphicon-move"></i> glyphicon glyphicon-move</li>
                    <li><i class="glyphicon glyphicon-step-backward"></i> glyphicon glyphicon-step-backward</li>
                    <li><i class="glyphicon glyphicon-fast-backward"></i> glyphicon glyphicon-fast-backward</li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="the-icons">
                    <li><i class="glyphicon glyphicon-backward"></i> glyphicon glyphicon-backward</li>
                    <li><i class="glyphicon glyphicon-play"></i> glyphicon glyphicon-play</li>
                    <li><i class="glyphicon glyphicon-pause"></i> glyphicon glyphicon-pause</li>
                    <li><i class="glyphicon glyphicon-stop"></i> glyphicon glyphicon-stop</li>
                    <li><i class="glyphicon glyphicon-forward"></i> glyphicon glyphicon-forward</li>
                    <li><i class="glyphicon glyphicon-fast-forward"></i> glyphicon glyphicon-fast-forward</li>
                    <li><i class="glyphicon glyphicon-step-forward"></i> glyphicon glyphicon-step-forward</li>
                    <li><i class="glyphicon glyphicon-eject"></i> glyphicon glyphicon-eject</li>
                    <li><i class="glyphicon glyphicon-chevron-left"></i> glyphicon glyphicon-chevron-left</li>
                    <li><i class="glyphicon glyphicon-chevron-right"></i> glyphicon glyphicon-chevron-right</li>
                    <li><i class="glyphicon glyphicon-plus-sign"></i> glyphicon glyphicon-plus-sign</li>
                    <li><i class="glyphicon glyphicon-minus-sign"></i> glyphicon glyphicon-minus-sign</li>
                    <li><i class="glyphicon glyphicon-remove-sign"></i> glyphicon glyphicon-remove-sign</li>
                    <li><i class="glyphicon glyphicon-ok-sign"></i> glyphicon glyphicon-ok-sign</li>
                    <li><i class="glyphicon glyphicon-question-sign"></i> glyphicon glyphicon-question-sign</li>
                    <li><i class="glyphicon glyphicon-info-sign"></i> glyphicon glyphicon-info-sign</li>
                    <li><i class="glyphicon glyphicon-screenshot"></i> glyphicon glyphicon-screenshot</li>
                    <li><i class="glyphicon glyphicon-remove-circle"></i> glyphicon glyphicon-remove-circle</li>
                    <li><i class="glyphicon glyphicon-ok-circle"></i> glyphicon glyphicon-ok-circle</li>
                    <li><i class="glyphicon glyphicon-ban-circle"></i> glyphicon glyphicon-ban-circle</li>
                    <li><i class="glyphicon glyphicon-arrow-left"></i> glyphicon glyphicon-arrow-left</li>
                    <li><i class="glyphicon glyphicon-arrow-right"></i> glyphicon glyphicon-arrow-right</li>
                    <li><i class="glyphicon glyphicon-arrow-up"></i> glyphicon glyphicon-arrow-up</li>
                    <li><i class="glyphicon glyphicon-arrow-down"></i> glyphicon glyphicon-arrow-down</li>
                    <li><i class="glyphicon glyphicon-share-alt"></i> glyphicon glyphicon-share-alt</li>
                    <li><i class="glyphicon glyphicon-resize-full"></i> glyphicon glyphicon-resize-full</li>
                    <li><i class="glyphicon glyphicon-resize-small"></i> glyphicon glyphicon-resize-small</li>
                    <li><i class="glyphicon glyphicon-plus"></i> glyphicon glyphicon-plus</li>
                    <li><i class="glyphicon glyphicon-minus"></i> glyphicon glyphicon-minus</li>
                    <li><i class="glyphicon glyphicon-asterisk"></i> glyphicon glyphicon-asterisk</li>
                    <li><i class="glyphicon glyphicon-exclamation-sign"></i> glyphicon glyphicon-exclamation-sign</li>
                    <li><i class="glyphicon glyphicon-gift"></i> glyphicon glyphicon-gift</li>
                    <li><i class="glyphicon glyphicon-leaf"></i> glyphicon glyphicon-leaf</li>
                    <li><i class="glyphicon glyphicon-fire"></i> glyphicon glyphicon-fire</li>
                    <li><i class="glyphicon glyphicon-eye-open"></i> glyphicon glyphicon-eye-open</li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="the-icons">
                    <li><i class="glyphicon glyphicon-eye-close"></i> glyphicon glyphicon-eye-close</li>
                    <li><i class="glyphicon glyphicon-warning-sign"></i> glyphicon glyphicon-warning-sign</li>
                    <li><i class="glyphicon glyphicon-plane"></i> glyphicon glyphicon-plane</li>
                    <li><i class="glyphicon glyphicon-calendar"></i> glyphicon glyphicon-calendar</li>
                    <li><i class="glyphicon glyphicon-random"></i> glyphicon glyphicon-random</li>
                    <li><i class="glyphicon glyphicon-comment"></i> glyphicon glyphicon-comment</li>
                    <li><i class="glyphicon glyphicon-magnet"></i> glyphicon glyphicon-magnet</li>
                    <li><i class="glyphicon glyphicon-chevron-up"></i> glyphicon glyphicon-chevron-up</li>
                    <li><i class="glyphicon glyphicon-chevron-down"></i> glyphicon glyphicon-chevron-down</li>
                    <li><i class="glyphicon glyphicon-retweet"></i> glyphicon glyphicon-retweet</li>
                    <li><i class="glyphicon glyphicon-shopping-cart"></i> glyphicon glyphicon-shopping-cart</li>
                    <li><i class="glyphicon glyphicon-folder-close"></i> glyphicon glyphicon-folder-close</li>
                    <li><i class="glyphicon glyphicon-folder-open"></i> glyphicon glyphicon-folder-open</li>
                    <li><i class="glyphicon glyphicon-resize-vertical"></i> glyphicon glyphicon-resize-vertical</li>
                    <li><i class="glyphicon glyphicon-resize-horizontal"></i> glyphicon glyphicon-resize-horizontal</li>
                    <li><i class="glyphicon glyphicon-hdd"></i> glyphicon glyphicon-hdd</li>
                    <li><i class="glyphicon glyphicon-bullhorn"></i> glyphicon glyphicon-bullhorn</li>
                    <li><i class="glyphicon glyphicon-bell"></i> glyphicon glyphicon-bell</li>
                    <li><i class="glyphicon glyphicon-certificate"></i> glyphicon glyphicon-certificate</li>
                    <li><i class="glyphicon glyphicon-thumbs-up"></i> glyphicon glyphicon-thumbs-up</li>
                    <li><i class="glyphicon glyphicon-thumbs-down"></i> glyphicon glyphicon-thumbs-down</li>
                    <li><i class="glyphicon glyphicon-hand-right"></i> glyphicon glyphicon-hand-right</li>
                    <li><i class="glyphicon glyphicon-hand-left"></i> glyphicon glyphicon-hand-left</li>
                    <li><i class="glyphicon glyphicon-hand-up"></i> glyphicon glyphicon-hand-up</li>
                    <li><i class="glyphicon glyphicon-hand-down"></i> glyphicon glyphicon-hand-down</li>
                    <li><i class="glyphicon glyphicon-circle-arrow-right"></i> glyphicon glyphicon-circle-arrow-right</li>
                    <li><i class="a icon-circle-arrow-left s s"></i> glyphicon glyphicon-circle-arrow-left</li>
                    <li><i class="glyphicon glyphicon-circle-arrow-up"></i> glyphicon glyphicon-circle-arrow-up</li>
                    <li><i class="glyphicon glyphicon-circle-arrow-down"></i> glyphicon glyphicon-circle-arrow-down</li>
                    <li><i class="glyphicon glyphicon-globe"></i> glyphicon glyphicon-globe</li>
                    <li><i class="glyphicon glyphicon-wrench"></i> glyphicon glyphicon-wrench</li>
                    <li><i class="glyphicon glyphicon-tasks"></i> glyphicon glyphicon-tasks</li>
                    <li><i class="glyphicon glyphicon-filter"></i> glyphicon glyphicon-filter</li>
                    <li><i class="glyphicon glyphicon-briefcase"></i> glyphicon glyphicon-briefcase</li>
                    <li><i class="glyphicon glyphicon-fullscreen"></i> glyphicon glyphicon-fullscreen</li>
                </ul>
            </div>
        </div>

        </section>

        </div>
        </div>
        </div>
        <!--/span-->
        <!--/span-->
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-plus"></i> Extended Elements</h2>

                    <div class="box-icon">
                        <a href="#" class="btn btn-setting btn-round btn-default"><i
                                class="glyphicon glyphicon-cog"></i></a>
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                class="glyphicon glyphicon-chevron-up"></i></a>
                        <a href="#" class="btn btn-close btn-round btn-default"><i
                                class="glyphicon glyphicon-remove"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <table class="table table-bordered table-striped responsive">
                        <tbody>
                        <tr>
                            <td><h3>Multiple File Upload</h3></td>
                            <td>
                                <input data-no-uniform="true" type="file" name="file_upload" id="file_upload">
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><h3>CSS3 Animations</h3></td>
                            <td>
                                <h3 class="animated rubberBand">Animation</h3>
                            </td>
                            <td>
                                <code>&lt;h3 class="animated rubberBand"&gt;Animation&lt;/h3&gt;</code>
                                <br>
                                For all more animation classes like <code>rubberBand</code>, please refer to
                                <a target="_blank" href="http://daneden.github.io/animate.css/">http://daneden.github.io/animate.css/</a>
                            </td>
                        </tr>
                        <tr>
                            <td><h3>Star Rating</h3></td>
                            <td>
                                <div class="raty"></div>
                            </td>
                            <td><code>&lt;div class="raty"&gt;&lt;/div&gt;</code></td>
                        </tr>
                        <tr>
                            <td><h3>Toggle Switch</h3></td>
                            <td>
                                <input data-no-uniform="true" checked="" type="checkbox" class="iphone-toggle">
                            </td>
                            <td><code>&lt;input data-no-uniform="true" type="checkbox" class="iphone-toggle"&gt;</code></td>
                        </tr>
                        <tr>
                            <td><h3>Auto Growing Textarea</h3></td>
                            <td>
                                <textarea class="autogrow">Press enter here, it will grow automatically.</textarea>
                            </td>
                            <td><code>&lt;textarea class="autogrow"&gt;&lt;/textarea&gt;</code></td>
                        </tr>
                        <tr>
                            <td><h3>Popover</h3></td>
                            <td>
                                <a href="#" class="btn btn-danger" data-toggle="popover"
                                   data-content="And here's some amazing content. It's very engaging. right?"
                                   title="A Title">Click for popover</a>
                            </td>
                            <td><code>&lt;a href="#" class="btn btn-danger" data-toggle="popover" data-content="And here's
                                    some amazing content. It's very engaging. right?" title="A Title"&gt;hover for popover&lt;/a&gt;</code>
                            </td>
                        </tr>
                        <tr>
                            <td><h3>Dialog</h3></td>
                            <td>
                                <a href="#" class="btn btn-info btn-setting">Click for dialog</a>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><h3>Tooltip</h3></td>
                            <td>
                                <a href="#" title="Tooltip, you can change the position." data-toggle="tooltip"
                                   class="btn btn-warning">Hover for tooltip</a>
                            </td>
                            <td><code>&lt;a href="#" title="Tooltip, you can change the position, for example use
                                    data-placement="left"." data-toggle="tooltip" class="btn btn-warning"&gt;Hover for
                                    tooltip&lt;/a&gt;</code></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--/span-->

    </div><!--/row-->

    <div class="row">
        <div class="box col-md-6">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-tasks"></i> Progress Bars</h2>

                    <div class="box-icon">
                        <a href="#" class="btn btn-setting btn-round btn-default"><i
                                class="glyphicon glyphicon-cog"></i></a>
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                class="glyphicon glyphicon-chevron-up"></i></a>
                        <a href="#" class="btn btn-close btn-round btn-default"><i
                                class="glyphicon glyphicon-remove"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <h3>Basic</h3>

                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                             aria-valuemax="100" style="width: 60%;">
                            60%
                        </div>
                    </div>

                    <h3>Animated</h3>

                    <div class="progress progress-striped progress-success active">
                        <div class="progress-bar" style="width: 50%;"></div>
                    </div>
                    <h3>Additional Colors</h3>

                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                            <span class="sr-only">40% Complete (success)</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                            <span class="sr-only">20% Complete</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar"
                             aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                            <span class="sr-only">60% Complete (warning)</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar"
                             aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                            <span class="sr-only">80% Complete (danger)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/span-->

        <div class="box col-md-6">
            <div class="box-inner">
                <div class="box-header well">
                    <h2><i class="glyphicon glyphicon-eye-open"></i> Labels and Annotations</h2>

                    <div class="box-icon">
                        <a href="#" class="btn btn-setting btn-round btn-default"><i
                                class="glyphicon glyphicon-cog"></i></a>
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                class="glyphicon glyphicon-chevron-up"></i></a>
                        <a href="#" class="btn btn-close btn-round btn-default"><i
                                class="glyphicon glyphicon-remove"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Labels</th>
                            <th>Markup</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <span class="label-default label">Default</span>
                            </td>
                            <td>
                                <code>&lt;span class="label"&gt;Default&lt;/span&gt;</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="label-success label label-default">Success</span>
                            </td>
                            <td>
                                <code>&lt;span class="label label-success"&gt;Success&lt;/span&gt;</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="label-warning label label-default">Warning</span>
                            </td>
                            <td>
                                <code>&lt;span class="label label-warning"&gt;Warning&lt;/span&gt;</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="label-default label label-danger">Important</span>
                            </td>
                            <td>
                                <code>&lt;span class="label label-important"&gt;Important&lt;/span&gt;</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="label-info label label-default">Info</span>
                            </td>
                            <td>
                                <code>&lt;span class="label label-info"&gt;Info&lt;/span&gt;</code>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--/span-->

    </div><!--/row-->
    <div class="row">
        <div class="box col-md-5">
            <div class="box-inner">
                <div class="box-header well">
                    <h2><i class="glyphicon glyphicon-bullhorn"></i> Alerts</h2>

                    <div class="box-icon">
                        <a href="#" class="btn btn-setting btn-round btn-default"><i
                                class="glyphicon glyphicon-cog"></i></a>
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                class="glyphicon glyphicon-chevron-up"></i></a>
                        <a href="#" class="btn btn-close btn-round btn-default"><i
                                class="glyphicon glyphicon-remove"></i></a>
                    </div>
                </div>
                <div class="box-content alerts">
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Oh snap!</strong> Change a few things up and try submitting again.
                    </div>
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Well done!</strong> You successfully read this important alert message.
                    </div>
                    <div class="alert alert-info">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                    </div>
                </div>
            </div>
        </div>
        <!--/span-->

        <div class="box col-md-7">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-bell"></i> Notifications</h2>

                    <div class="box-icon">
                        <a href="#" class="btn btn-setting btn-round btn-default"><i
                                class="glyphicon glyphicon-cog"></i></a>
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                class="glyphicon glyphicon-chevron-up"></i></a>
                        <a href="#" class="btn btn-close btn-round btn-default"><i
                                class="glyphicon glyphicon-remove"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <div class="alert alert-info">
                        Click buttons below to see Pop Notifications.
                    </div>
                    <p class="center">
                        <button class="btn btn-primary noty"
                                data-noty-options="{&quot;text&quot;:&quot;This is a success notification&quot;,&quot;layout&quot;:&quot;topLeft&quot;,&quot;type&quot;:&quot;success&quot;}">
                            <i class="glyphicon glyphicon-bell icon-white"></i> Top Left
                        </button>
                        <button class="btn btn-primary noty"
                                data-noty-options="{&quot;text&quot;:&quot;This is an alert notification with fade effect&quot;,&quot;layout&quot;:&quot;topCenter&quot;,&quot;type&quot;:&quot;alert&quot;,&quot;animateOpen&quot;: {&quot;opacity&quot;: &quot;show&quot;}}">
                            <i class="glyphicon glyphicon-bell icon-white"></i> Top Center (fade)
                        </button>
                        <button class="btn btn-primary noty"
                                data-noty-options="{&quot;text&quot;:&quot;This is an error notification&quot;,&quot;layout&quot;:&quot;topRight&quot;,&quot;type&quot;:&quot;error&quot;}">
                            <i class="glyphicon glyphicon-bell icon-white"></i> Top Right
                        </button>
                        <button class="btn btn-primary noty"
                                data-noty-options="{&quot;text&quot;:&quot;This is a success information&quot;,&quot;layout&quot;:&quot;top&quot;,&quot;type&quot;:&quot;information&quot;}">
                            <i class="glyphicon glyphicon-bell icon-white"></i> Top Full Width
                        </button>
                    </p>
                    <p class="center">
                        <button class="btn btn-primary noty"
                                data-noty-options="{&quot;text&quot;:&quot;This is an alert notification with fade effect&quot;,&quot;layout&quot;:&quot;center&quot;,&quot;type&quot;:&quot;alert&quot;,&quot;animateOpen&quot;: {&quot;opacity&quot;: &quot;show&quot;}}">
                            <i class="glyphicon glyphicon-bell icon-white"></i> Center (fade)
                        </button>
                        <button class="btn btn-primary noty"
                                data-noty-options="{&quot;text&quot;:&quot;This is an error notification&quot;,&quot;layout&quot;:&quot;center&quot;,&quot;type&quot;:&quot;error&quot;}">
                            <i class="glyphicon glyphicon-bell icon-white"></i> Center
                        </button>
                    </p>

                    <p class="center">
                        <button class="btn btn-primary noty"
                                data-noty-options="{&quot;text&quot;:&quot;This is an error notification&quot;,&quot;layout&quot;:&quot;bottomLeft&quot;,&quot;type&quot;:&quot;error&quot;}">
                            <i class="glyphicon glyphicon-bell icon-white"></i> Bottom Left
                        </button>
                        <button class="btn btn-primary noty"
                                data-noty-options="{&quot;text&quot;:&quot;This is an alert notification with fade effect&quot;,&quot;layout&quot;:&quot;bottomRight&quot;,&quot;type&quot;:&quot;alert&quot;,&quot;animateOpen&quot;: {&quot;opacity&quot;: &quot;show&quot;}}">
                            <i class="glyphicon glyphicon-bell icon-white"></i> Bottom Right (fade)
                        </button>
                    </p>

                    <p class="center">
                        <button class="btn btn-primary noty"
                                data-noty-options="{&quot;text&quot;:&quot;This is an alert&quot;,&quot;layout&quot;:&quot;bottom&quot;,&quot;type&quot;:&quot;alert&quot;,&quot;closeButton&quot;:&quot;true&quot;}">
                            <i class="glyphicon glyphicon-bell icon-white"></i> Bottom Full Width with Close Button
                        </button>
                    </p>
                </div>
            </div>
        </div>
        <!--/span-->

        <div class="box col-md-7">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-refresh"></i> Ajax Loaders</h2>

                    <div class="box-icon">
                        <a href="#" class="btn btn-setting btn-round btn-default"><i
                                class="glyphicon glyphicon-cog"></i></a>
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                class="glyphicon glyphicon-chevron-up"></i></a>
                        <a href="#" class="btn btn-close btn-round btn-default"><i
                                class="glyphicon glyphicon-remove"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <ul class="ajax-loaders">
                        <?php for ($i = 1; $i <= 8; $i++) { ?>
                            <li><img src="img/ajax-loaders/ajax-loader-<?php echo $i ?>.gif"
                                     title="img/ajax-loaders/ajax-loader-<?php echo $i ?>.gif"></li>
                        <?php } ?>
                    </ul>
                <span class="clearfix">From / More <a href="http://ajaxload.info/"
                                                      target="_blank">http://ajaxload.info/</a></span>
                </div>
            </div>
        </div>
    </div>
    <div class="box col-md-9">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-font"></i> Typography</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <div class="page-header">
                    <h1>Typography
                        <small>Headings, paragraphs, lists, and other inline type elements</small>
                    </h1>
                </div>
                <div class="row ">
                    <div class="col-md-4">
                        <h3>Sample text and paragraphs</h3>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor,
                            quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel
                            eros. In sed ornare nulla. Donec consectetur, velit a pharetra ultricies, diam lorem lacinia
                            risus, ac commodo orci erat eu massa. Sed sit amet nulla ipsum. Donec felis mauris,
                            vulputate sed tempor at, aliquam a ligula. Pellentesque non pulvinar nisi.
                        </p>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor,
                            quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel
                            eros. In sed ornare nulla. Donec consectetur, velit a pharetra ultricies, diam lorem lacinia
                            risus, ac commodo orci erat eu massa. Sed sit amet nulla ipsum. Donec felis mauris,
                            vulputate sed tempor at, aliquam a ligula. Pellentesque non pulvinar nisi.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <h3>Example body text</h3>

                        <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis
                            dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula ut
                            id elit.</p>

                        <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non
                            commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec sed odio
                            dui.</p>
                    </div>
                    <div class="col-md-4 ">
                        <div class="well">
                            <h1>h1. Heading 1</h1>

                            <h2>h2. Heading 2</h2>

                            <h3>h3. Heading 3</h3>
                            <h4>h4. Heading 4</h4>
                            <h5>h5. Heading 5</h5>
                            <h6>h6. Heading 6</h6>
                        </div>
                    </div>
                </div>
                <!--/row -->

                <div class="row">
                    <div class="col-md-12">
                        <h3>Example blockquotes</h3>

                        <div class="row">
                            <div class="col-md-6">
                                <p>Default blockquotes are styled as such:</p>
                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a
                                        ante venenatis.</p>
                                    <small>Someone famous in <cite title="">Body of work</cite></small>
                                </blockquote>
                            </div>
                            <div class="col-md-6">
                                <p>You can always float your blockquote to the right:</p>
                                <blockquote class="pull-right">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a
                                        ante venenatis.</p>
                                    <small>Someone famous in <cite title="">Body of work</cite></small>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h3>More Sample Text</h3>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor,
                            quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel
                            eros. In sed ornare nulla. Donec consectetur, velit a pharetra ultricies, diam lorem lacinia
                            risus, ac commodo orci erat eu massa. Sed sit amet nulla ipsum. Donec felis mauris,
                            vulputate sed tempor at, aliquam a ligula. Pellentesque non pulvinar nisi.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <h3>And Paragraphs</h3>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor,
                            quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel
                            eros. In sed ornare nulla. Donec consectetur, velit a pharetra ultricies, diam lorem lacinia
                            risus, ac commodo orci erat eu massa. Sed sit amet nulla ipsum. Donec felis mauris,
                            vulputate sed tempor at, aliquam a ligula. Pellentesque non pulvinar nisi.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--/span-->

    <div class="box col-md-3">
        <div class="box-inner">
            <div class="box-header well">
                <h2>Unordered List</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <ul>
                    <li>Lorem ipsum dolor sit amet</li>
                    <li>Consectetur adipiscing elit</li>
                    <li>Integer molestie lorem at massa</li>
                    <li>Facilisis in pretium nisl aliquet</li>
                    <li>Nulla volutpat aliquam velit
                        <ul>
                            <li>Phasellus iaculis neque</li>
                            <li>Purus sodales ultricies</li>
                            <li>Vestibulum laoreet porttitor sem</li>
                            <li>Ac tristique libero volutpat at</li>
                        </ul>
                    </li>
                    <li>Faucibus porta lacus fringilla vel</li>
                    <li>Aenean sit amet erat nunc</li>
                    <li>Eget porttitor lorem</li>
                </ul>
            </div>
        </div>
    </div>
    <!--/span-->

    <div class="box col-md-3">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2>Ordered List</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <ol>
                    <li>Lorem ipsum dolor sit amet</li>
                    <li>Consectetur adipiscing elit</li>
                    <li>Integer molestie lorem at massa</li>
                    <li>Facilisis in pretium nisl aliquet</li>
                    <li>Nulla volutpat aliquam velit</li>
                    <li>Faucibus porta lacus fringilla vel</li>
                    <li>Aenean sit amet erat nunc</li>
                    <li>Eget porttitor lorem</li>
                </ol>
            </div>
        </div>
    </div>
    <!--/span-->

    <div class="box col-md-3">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2>Description List</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <dl>
                    <dt>Description lists</dt>
                    <dd>A description list is perfect for defining terms.</dd>
                    <dt>Euismod</dt>
                    <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                    <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                    <dt>Malesuada porta</dt>
                    <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                </dl>
            </div>
        </div>
    </div>
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Form Elements</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <div class="control-group">
                    <label class="control-label" for="selectError">Modern Select</label>

                    <div class="controls">
                        <select id="selectError" data-rel="chosen">
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                            <option>Option 4</option>
                            <option>Option 5</option>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="selectError1">Multiple Select / Tags</label>

                    <div class="controls">
                        <select id="selectError1" multiple class="form-control" data-rel="chosen">
                            <option>Option 1</option>
                            <option selected>Option 2</option>
                            <option>Option 3</option>
                            <option>Option 4</option>
                            <option>Option 5</option>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="selectError2">Group Select</label>

                    <div class="controls">
                        <select data-placeholder="Your Favorite Football Team" id="selectError2" data-rel="chosen">
                            <option value=""></option>
                            <optgroup label="NFC EAST">
                                <option>Dallas Cowboys</option>
                                <option>New York Giants</option>
                                <option>Philadelphia Eagles</option>
                                <option>Washington Redskins</option>
                            </optgroup>
                            <optgroup label="NFC NORTH">
                                <option>Chicago Bears</option>
                                <option>Detroit Lions</option>
                                <option>Green Bay Packers</option>
                                <option>Minnesota Vikings</option>
                            </optgroup>
                            <optgroup label="NFC SOUTH">
                                <option>Atlanta Falcons</option>
                                <option>Carolina Panthers</option>
                                <option>New Orleans Saints</option>
                                <option>Tampa Bay Buccaneers</option>
                            </optgroup>
                            <optgroup label="NFC WEST">
                                <option>Arizona Cardinals</option>
                                <option>St. Louis Rams</option>
                                <option>San Francisco 49ers</option>
                                <option>Seattle Seahawks</option>
                            </optgroup>
                            <optgroup label="AFC EAST">
                                <option>Buffalo Bills</option>
                                <option>Miami Dolphins</option>
                                <option>New England Patriots</option>
                                <option>New York Jets</option>
                            </optgroup>
                            <optgroup label="AFC NORTH">
                                <option>Baltimore Ravens</option>
                                <option>Cincinnati Bengals</option>
                                <option>Cleveland Browns</option>
                                <option>Pittsburgh Steelers</option>
                            </optgroup>
                            <optgroup label="AFC SOUTH">
                                <option>Houston Texans</option>
                                <option>Indianapolis Colts</option>
                                <option>Jacksonville Jaguars</option>
                                <option>Tennessee Titans</option>
                            </optgroup>
                            <optgroup label="AFC WEST">
                                <option>Denver Broncos</option>
                                <option>Kansas City Chiefs</option>
                                <option>Oakland Raiders</option>
                                <option>San Diego Chargers</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
                <br>


                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="">
                        Option one is this and that&mdash;be sure to include why it's great
                    </label>
                </div>
                <div class="checkbox disabled">
                    <label>
                        <input type="checkbox" value="" disabled>
                        Option two is disabled
                    </label>
                </div>

                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                        Option one is this and that&mdash;be sure to include why it's great
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                        Option two can be something else and selecting it will deselect option one
                    </label>
                </div>
                <div class="radio disabled">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                        Option three is disabled
                    </label>
                </div>

                <label class="checkbox-inline">
                    <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
                </label>

                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 1
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 2
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 3
                </label>

                <br>
                <br>
                <br>

                <div class="form-group has-success col-md-4">
                    <label class="control-label" for="inputSuccess1">Input with success</label>
                    <input type="text" class="form-control" id="inputSuccess1">
                </div>
                <div class="form-group has-warning col-md-4">
                    <label class="control-label" for="inputWarning1">Input with warning</label>
                    <input type="text" class="form-control" id="inputWarning1">
                </div>
                <div class="form-group has-error col-md-4">
                    <label class="control-label" for="inputError1">Input with error</label>
                    <input type="text" class="form-control" id="inputError1">
                </div>

                <form class="form-inline" role="form">
                    <div class="form-group has-success has-feedback">
                        <label class="control-label" for="inputSuccess4">Input with success</label>
                        <input type="text" class="form-control" id="inputSuccess4">
                        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                    </div>
                </form>

                <br>
                <div class="input-group col-md-4">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                    <input type="text" class="form-control" placeholder="Username">
                </div>
            </div>
        </div>
    </div>
    <!--/span-->

    </div><!--/row-->

    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-edit"></i> Form Elements</h2>

                    <div class="box-icon">
                        <a href="#" class="btn btn-setting btn-round btn-default"><i
                                class="glyphicon glyphicon-cog"></i></a>
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                class="glyphicon glyphicon-chevron-up"></i></a>
                        <a href="#" class="btn btn-close btn-round btn-default"><i
                                class="glyphicon glyphicon-remove"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <form role="form">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" id="exampleInputFile">

                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Check me out
                            </label>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>

                </div>
            </div>
        </div>

        <!--/row-->

<?php require('footer.php'); ?>