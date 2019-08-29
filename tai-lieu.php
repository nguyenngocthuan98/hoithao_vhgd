<?php include('header.php') ?>
<section id="sp-page-title" class="page-title-boxed">
    <div class="row">
        <div id="sp-title" class="col-sm-12 col-md-12">
            <div class="sp-column ">
                <div class="sp-module ">
                    <div class="sp-module-content">

                        <div class="mod-sppagebuilder  sp-page-builder">
                            <div class="page-content">
                                <div id="section-id-1500534193368" class="sppb-section ">
                                    <div class="sppb-container-inner">
                                        <div class="sppb-row">
                                            <div class="sppb-col-md-12">
                                                <div id="column-id-1500534193369" class="sppb-column">
                                                    <div class="sppb-column-addons">
                                                        <div id="sppb-addon-1555821603644" class="clearfix">
                                                            <div class="sppb-addon sppb-addon-module ">
                                                                <div class="sppb-addon-content">
                                                                    <div class="mainheading-wrapper" style="background: url(img/newsletter_bg.jpg);">
                                                                        <div class="uk-container uk-container-center heading-content heading-align-center">
                                                                            <div class="heading-text-wrapper">
                                                                                <div class="header_text">
                                                                                    <h1>Tài liệu</h1>
                                                                                    <div class="clearfix"></div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="clearfix"></div>
                                                                        </div>

                                                                        <div id="bdt-header-animation"></div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sp-page-title" style="background-color: #1c1c24;">
                    <div class="container">
                        <h2> </h2></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="sp-main-body">
    <div class="container">
        <div class="row">
            <div id="sp-component" class="col-sm-9 col-md-9">
                <div class="sp-column ">
                    <div id="system-message-container">
                    </div>

                    <div class="dropfiles-page ">

                        <script type="text/x-handlebars-template" id="dropfiles-template-default-files">
                            {{#if files}}
                            <div class="dropfiles_list">
                                {{#each files}}{{#if ext}}
                                <div class="file">
                                    <div class="filecontent">
                                        {{#if custom_icon}}
                                        <div class="custom-icon {{ext}}"><img src="/{{custom_icon_thumb}}" alt="" /></div>
                                        {{else}}
                                        <div class="ext {{ext}}"><span class="txt">{{ext}}</span></div>
                                        {{/if}}
                                        <h3><a href="/{{link}}" title="{{title}}">{{title}}</a></h3>
                                        <div class="file-xinfo">
                                            {{#if description}}
                                            <div class="file-desc">{{{description}}}</div>
                                            {{/if}} {{#if versionNumber}}
                                            <div class="file-version"><span>Version                                : </span> {{versionNumber}}&nbsp;
                                            </div>
                                            {{/if}} {{#if size}}
                                            <div class="file-size"><span>Size                                : </span> {{bytesToSize size}}
                                            </div>
                                            {{/if}}
                                            <div class="file-hits"><span>Hits                                : </span> {{hits}}
                                            </div>
                                            <div class="file-dated"><span>Date added                                : </span> {{created_time}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="file-right">
                                        <div class="downloadblock">
                                            <a class="downloadlink" href="/{{link}}">Download<i
                                        class="zmdi zmdi-cloud-download dropfiles-download"></i></a> {{#if openpdflink}}
                                            <a href="/{{openpdflink}}" class="openlink" target="_blank">Open<i
                                        class="zmdi zmdi-filter-center-focus dropfiles-preview"></i></a> {{else}} {{#if viewerlink}}
                                            <a data-id="{{id}}" data-catid="{{catid}}" data-file-type="{{ext}}" class="openlink dropfileslightbox" href="/{{viewerlink}}">Preview<i
                                        class="zmdi zmdi-filter-center-focus dropfiles-preview"></i></a> {{/if}} {{/if}}
                                        </div>
                                    </div>
                                </div>
                                {{/if}}{{/each}}
                            </div>
                            {{/if}}
                        </script>

                        <div class="dropfiles-content dropfiles-content-multi dropfiles-files dropfiles-content-default" data-category="87">
                            <input type="hidden" id="current_category" value="87" />
                            <input type="hidden" id="current_category_slug" value="nam-2019" />
                            <div class="dropfiles-container">
                                <div class="dropfiles-container-default ">
                                    <div class="dropfiles-categories">
                                        <div class="categories-head">
                                            <h2>Năm 2019</h2>
                                        </div>
                                    </div>
                                    <div class="dropfiles_list">
                                        <div class="file">
                                            <div class="filecontent">
                                                <div class="ext pdf"><span class="txt">pdf</div>
                                                                                                                            <h3><a class="dropfiles_downloadlink" title="Thông cáo báo chí số 1"
                                                   href="https://hoithaovhgd.vn/files/87/Nam-2019/5/Thong-cao-bao-chi-số-1.pdf">Thông cáo báo chí số 1</a>
                                            </h3>
                                                                                <div class="file-xinfo">
                                            <div class="file-desc"></div>
                                                                                                                                        <div class="file-size">
                                                <span>
                                                    Size:
                                                </span> 301.01 KB </div>
                                                <div class="file-hits">
                                                    <span>Hits                                                    : </span> 128</div>
                                                <div class="file-dated">
                                                    <span>
                                                    Date added:
                                                </span> 2019-05-02 </div>
                                            </div>
                                        </div>
                                        <div class="file-right">
                                            <a class="downloadlink" href="https://hoithaovhgd.vn/files/87/Nam-2019/5/Thong-cao-bao-chi-số-1.pdf">
                                                Download                                                <i class="zmdi zmdi-cloud-download dropfiles-download"></i></a>
                                            <a data-id="5" data-catid="87" data-file-type="pdf" class="openlink dropfileslightbox" href="https://docs.google.com/viewer?url=https%3A%2F%2Fhoithaovhgd.vn%2Ffiles%2F87%2FNam-2019%2F5%2FThong-cao-bao-chi-s%E1%BB%91-1.pdf%3Ftoken%3Ddcb4f4bb41c41280bd0f83b8f7561fd5%26preview%3D1&embedded=true">
                                                    Preview                                                    <i class="zmdi zmdi-filter-center-focus dropfiles-preview"></i>
                                                </a>
                                        </div>
                                    </div>
                                    <div class="file">
                                        <div class="filecontent">
                                            <div class="ext pdf"><span class="txt">pdf</div>
                                                                                                                            <h3><a class="dropfiles_downloadlink" title="Chương trình hội thảo"
                                                   href="https://hoithaovhgd.vn/files/87/Nam-2019/6/Chương-trinh-hội-thảo.pdf">Chương trình hội thảo</a>
                                            </h3>
                                                                                <div class="file-xinfo">
                                            <div class="file-desc"></div>
                                                                                                                                        <div class="file-size">
                                                <span>
                                                    Size:
                                                </span> 240.63 KB </div>
                                            <div class="file-hits">
                                                <span>Hits                                                    : </span> 204</div>
                                            <div class="file-dated">
                                                <span>
                                                    Date added:
                                                </span> 2019-05-02 </div>
                                        </div>
                                    </div>
                                    <div class="file-right">
                                        <a class="downloadlink" href="https://hoithaovhgd.vn/files/87/Nam-2019/6/Chương-trinh-hội-thảo.pdf">
                                                Download                                                <i class="zmdi zmdi-cloud-download dropfiles-download"></i></a>
                                        <a data-id="6" data-catid="87" data-file-type="pdf" class="openlink dropfileslightbox" href="https://docs.google.com/viewer?url=https%3A%2F%2Fhoithaovhgd.vn%2Ffiles%2F87%2FNam-2019%2F6%2FCh%C6%B0%C6%A1ng-trinh-h%E1%BB%99i-th%E1%BA%A3o.pdf%3Ftoken%3Ddcb4f4bb41c41280bd0f83b8f7561fd5%26preview%3D1&embedded=true">
                                                    Preview                                                    <i class="zmdi zmdi-filter-center-focus dropfiles-preview"></i>
                                                </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script type="text/x-handlebars-template" id="dropfiles-template-default-categories">
                    <div class="dropfiles-categories">
                        {{#with category}}
                        <div class="categories-head ">
                            <h2>{{title}}</h2>
                        </div>
                        {{/with}} {{#if categories}} {{#each categories}}
                        <a class="catlink dropfilescategory" href="#" data-idcat="{{id}}" title="{{title}}">
                            <span>{{title}}</span>
                            <i class="zmdi zmdi-folder dropfiles-folder"></i>
                        </a>
                        {{/each}} {{/if}} {{#with category}} {{#if parent_id}}
                        <a class="catlink dropfilescategory backcategory" href="#" data-idcat="{{parent_id}}"><i
                        class="zmdi zmdi-chevron-left"></i>Back            </a> {{/if}} {{/with}}
                    </div>
                </script>

                <script type="text/x-handlebars-template" id="dropfiles-template-default-files">
                    {{#if files}}
                    <div class="dropfiles_list">
                        {{#each files}}{{#if ext}}
                        <div class="file">
                            <div class="filecontent">
                                {{#if custom_icon}}
                                <div class="custom-icon {{ext}}"><img src="/{{custom_icon_thumb}}" alt="" /></div>
                                {{else}}
                                <div class="ext {{ext}}"><span class="txt">{{ext}}</span></div>
                                {{/if}}
                                <h3><a href="/{{link}}" title="{{title}}">{{title}}</a></h3>
                                <div class="file-xinfo">
                                    {{#if description}}
                                    <div class="file-desc">{{{description}}}</div>
                                    {{/if}} {{#if versionNumber}}
                                    <div class="file-version"><span>Version                                : </span> {{versionNumber}}&nbsp;
                                    </div>
                                    {{/if}} {{#if size}}
                                    <div class="file-size"><span>Size                                : </span> {{bytesToSize size}}
                                    </div>
                                    {{/if}}
                                    <div class="file-hits"><span>Hits                                : </span> {{hits}}
                                    </div>
                                    <div class="file-dated"><span>Date added                                : </span> {{created_time}}
                                    </div>
                                </div>
                            </div>
                            <div class="file-right">
                                <div class="downloadblock">
                                    <a class="downloadlink" href="/{{link}}">Download<i
                                        class="zmdi zmdi-cloud-download dropfiles-download"></i></a> {{#if openpdflink}}
                                    <a href="/{{openpdflink}}" class="openlink" target="_blank">Open<i
                                        class="zmdi zmdi-filter-center-focus dropfiles-preview"></i></a> {{else}} {{#if viewerlink}}
                                    <a data-id="{{id}}" data-catid="{{catid}}" data-file-type="{{ext}}" class="openlink dropfileslightbox" href="/{{viewerlink}}">Preview<i
                                        class="zmdi zmdi-filter-center-focus dropfiles-preview"></i></a> {{/if}} {{/if}}
                                </div>
                            </div>
                        </div>
                        {{/if}}{{/each}}
                    </div>
                    {{/if}}
                </script>

                <div class="dropfiles-content dropfiles-content-multi dropfiles-files dropfiles-content-default" data-category="89">
                    <input type="hidden" id="current_category" value="89" />
                    <input type="hidden" id="current_category_slug" value="nam-2018" />
                    <div class="dropfiles-container">
                        <div class="dropfiles-container-default ">
                            <div class="dropfiles-categories">
                                <div class="categories-head">
                                    <h2>Năm 2018</h2>
                                </div>
                            </div>
                            <div class="dropfiles_list">
                                <div class="file">
                                    <div class="filecontent">
                                        <div class="ext pdf"><span class="txt">pdf</div>
                                                                                                                            <h3><a class="dropfiles_downloadlink" title="Documents"
                                                   href="https://hoithaovhgd.vn/files/89/Nam-2018/7/Documents.pdf">Documents</a>
                                            </h3>
                                                                                <div class="file-xinfo">
                                            <div class="file-desc"></div>
                                                                                                                                        <div class="file-size">
                                                <span>
                                                    Size:
                                                </span> 21.81 KB </div>
                                        <div class="file-hits">
                                            <span>Hits                                                    : </span> 39</div>
                                        <div class="file-dated">
                                            <span>
                                                    Date added:
                                                </span> 2019-05-05 </div>
                                    </div>
                                </div>
                                <div class="file-right">
                                    <a class="downloadlink" href="https://hoithaovhgd.vn/files/89/Nam-2018/7/Documents.pdf">
                                                Download                                                <i class="zmdi zmdi-cloud-download dropfiles-download"></i></a>
                                    <a data-id="7" data-catid="89" data-file-type="pdf" class="openlink dropfileslightbox" href="https://docs.google.com/viewer?url=https%3A%2F%2Fhoithaovhgd.vn%2Ffiles%2F89%2FNam-2018%2F7%2FDocuments.pdf%3Ftoken%3Ddcb4f4bb41c41280bd0f83b8f7561fd5%26preview%3D1&embedded=true">
                                                    Preview                                                    <i class="zmdi zmdi-filter-center-focus dropfiles-preview"></i>
                                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/x-handlebars-template" id="dropfiles-template-default-categories">
                <div class="dropfiles-categories">
                    {{#with category}}
                    <div class="categories-head ">
                        <h2>{{title}}</h2>
                    </div>
                    {{/with}} {{#if categories}} {{#each categories}}
                    <a class="catlink dropfilescategory" href="#" data-idcat="{{id}}" title="{{title}}">
                        <span>{{title}}</span>
                        <i class="zmdi zmdi-folder dropfiles-folder"></i>
                    </a>
                    {{/each}} {{/if}} {{#with category}} {{#if parent_id}}
                    <a class="catlink dropfilescategory backcategory" href="#" data-idcat="{{parent_id}}"><i
                        class="zmdi zmdi-chevron-left"></i>Back            </a> {{/if}} {{/with}}
                </div>
            </script>

            <script type="text/x-handlebars-template" id="dropfiles-template-default-files">
                {{#if files}}
                <div class="dropfiles_list">
                    {{#each files}}{{#if ext}}
                    <div class="file">
                        <div class="filecontent">
                            {{#if custom_icon}}
                            <div class="custom-icon {{ext}}"><img src="/{{custom_icon_thumb}}" alt="" /></div>
                            {{else}}
                            <div class="ext {{ext}}"><span class="txt">{{ext}}</span></div>
                            {{/if}}
                            <h3><a href="/{{link}}" title="{{title}}">{{title}}</a></h3>
                            <div class="file-xinfo">
                                {{#if description}}
                                <div class="file-desc">{{{description}}}</div>
                                {{/if}} {{#if versionNumber}}
                                <div class="file-version"><span>Version                                : </span> {{versionNumber}}&nbsp;
                                </div>
                                {{/if}} {{#if size}}
                                <div class="file-size"><span>Size                                : </span> {{bytesToSize size}}
                                </div>
                                {{/if}}
                                <div class="file-hits"><span>Hits                                : </span> {{hits}}
                                </div>
                                <div class="file-dated"><span>Date added                                : </span> {{created_time}}
                                </div>
                            </div>
                        </div>
                        <div class="file-right">
                            <div class="downloadblock">
                                <a class="downloadlink" href="/{{link}}">Download<i
                                        class="zmdi zmdi-cloud-download dropfiles-download"></i></a> {{#if openpdflink}}
                                <a href="/{{openpdflink}}" class="openlink" target="_blank">Open<i
                                        class="zmdi zmdi-filter-center-focus dropfiles-preview"></i></a> {{else}} {{#if viewerlink}}
                                <a data-id="{{id}}" data-catid="{{catid}}" data-file-type="{{ext}}" class="openlink dropfileslightbox" href="/{{viewerlink}}">Preview<i
                                        class="zmdi zmdi-filter-center-focus dropfiles-preview"></i></a> {{/if}} {{/if}}
                            </div>
                        </div>
                    </div>
                    {{/if}}{{/each}}
                </div>
                {{/if}}
            </script>

            <div class="dropfiles-content dropfiles-content-multi dropfiles-files dropfiles-content-default" data-category="90">
                <input type="hidden" id="current_category" value="90" />
                <input type="hidden" id="current_category_slug" value="nam-2017" />
                <div class="dropfiles-container">
                    <div class="dropfiles-container-default ">
                        <div class="dropfiles-categories">
                            <div class="categories-head">
                                <h2>Năm 2017</h2>
                            </div>
                        </div>
                        <div class="dropfiles_list">
                            <div class="file">
                                <div class="filecontent">
                                    <div class="ext pdf"><span class="txt">pdf</div>
                                                                                                                            <h3><a class="dropfiles_downloadlink" title="Documents"
                                                   href="https://hoithaovhgd.vn/files/90/Nam-2017/8/Documents.pdf">Documents</a>
                                            </h3>
                                                                                <div class="file-xinfo">
                                            <div class="file-desc"></div>
                                                                                                                                        <div class="file-size">
                                                <span>
                                                    Size:
                                                </span> 21.81 KB </div>
                                    <div class="file-hits">
                                        <span>Hits                                                    : </span> 24</div>
                                    <div class="file-dated">
                                        <span>
                                                    Date added:
                                                </span> 2019-05-05 </div>
                                </div>
                            </div>
                            <div class="file-right">
                                <a class="downloadlink" href="https://hoithaovhgd.vn/files/90/Nam-2017/8/Documents.pdf">
                                                Download                                                <i class="zmdi zmdi-cloud-download dropfiles-download"></i></a>
                                <a data-id="8" data-catid="90" data-file-type="pdf" class="openlink dropfileslightbox" href="https://docs.google.com/viewer?url=https%3A%2F%2Fhoithaovhgd.vn%2Ffiles%2F90%2FNam-2017%2F8%2FDocuments.pdf%3Ftoken%3Ddcb4f4bb41c41280bd0f83b8f7561fd5%26preview%3D1&embedded=true">
                                                    Preview                                                    <i class="zmdi zmdi-filter-center-focus dropfiles-preview"></i>
                                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
    <div id="sp-right" class="col-sm-3 col-md-3">
        <?php include('nav-menu.php') ?>
    </div>
    </div>
    </div>
</section>
<?php include('footer.php') ?>