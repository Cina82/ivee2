<?php $__env->startSection('content'); ?>
 <work-leads>
    <div class="WorkLeads">

        <div class="background ng-scope" ng-controller="WorkLeadsController" ng-class="{
                'theme-no-top-margin':
                    '',
            }">
             <div class="page-grid theme-full-bleed-at-xs">
                <div class="column-lg-6">
                    <pa-upsell-rich-data-banner class="ng-isolate-scope" dir="rtl" >
                        <div responsive-if="above-md" responsive-grid="page" class="ng-scope">
                            <!-- ngIf: responsiveIfVisible -->
                            <div ng-if="responsiveIfVisible" class="ng-scope">
                                <div ng-transclude="">
                                    <div class="pa-upsell-rich-data-banner ng-scope">
                                        <div class="pa-upsell-rich-data-banner__box">
                                            <div class="tp-heading-5 tp-weight--demi
                            pa-upsell-rich-data-banner__heading">
                                                <!-- ngRepeat: bannerMsg in paUpsellRichDataBanner.bannerMessages --><span ng-repeat="bannerMsg in paUpsellRichDataBanner.bannerMessages" ng-bind="bannerMsg.text" ng-class="{'tp-color--brand': bannerMsg.type=='highlight'}" class="ng-binding ng-scope">DJ pros on ProAssist hear back from up to </span>
                                                <!-- end ngRepeat: bannerMsg in paUpsellRichDataBanner.bannerMessages --><span ng-repeat="bannerMsg in paUpsellRichDataBanner.bannerMessages" ng-bind="bannerMsg.text" ng-class="{'tp-color--brand': bannerMsg.type=='highlight'}" class="ng-binding ng-scope tp-color--brand">2.2X more customers </span>
                                                <!-- end ngRepeat: bannerMsg in paUpsellRichDataBanner.bannerMessages --><span ng-repeat="bannerMsg in paUpsellRichDataBanner.bannerMessages" ng-bind="bannerMsg.text" ng-class="{'tp-color--brand': bannerMsg.type=='highlight'}" class="ng-binding ng-scope">and </span>
                                                <!-- end ngRepeat: bannerMsg in paUpsellRichDataBanner.bannerMessages --><span ng-repeat="bannerMsg in paUpsellRichDataBanner.bannerMessages" ng-bind="bannerMsg.text" ng-class="{'tp-color--brand': bannerMsg.type=='highlight'}" class="ng-binding ng-scope tp-color--brand">save up to 22% </span>
                                                <!-- end ngRepeat: bannerMsg in paUpsellRichDataBanner.bannerMessages --><span ng-repeat="bannerMsg in paUpsellRichDataBanner.bannerMessages" ng-bind="bannerMsg.text" ng-class="{'tp-color--brand': bannerMsg.type=='highlight'}" class="ng-binding ng-scope">per customer.</span>
                                                <!-- end ngRepeat: bannerMsg in paUpsellRichDataBanner.bannerMessages -->
                                            </div>
                                            <a class="tp-button ng-binding" ng-bind="paUpsellRichDataBanner.buttonText" ng-href="/profile/services/W:h85DrJcpp4SA/proassist-setup/?request_category=iJlabHh2QF9ylg&amp;from_richdata_banner=true" event-track="pa upsell banner/click from rich data banner" event-track-on="click" href="/profile/services/W:h85DrJcpp4SA/proassist-setup/?request_category=iJlabHh2QF9ylg&amp;from_richdata_banner=true">Try ProAssist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end ngIf: responsiveIfVisible -->
                        </div>

                        <div responsive-if="below-md" responsive-grid="page" class="ng-scope">
                            <!-- ngIf: responsiveIfVisible -->
                        </div>
                    </pa-upsell-rich-data-banner>

                    <div class="WorkLeads-RequestsHeader" dir="rtl">
                        <h1 class="WorkHeader">
                                    Requests
                                </h1>

                        <span class="WorkLeads-sortBy">
                                    <aura-select aura-select-label="Select an option" class="ng-scope"><div class="Select" ng-class="{ 'is-open': isOpen, 'theme-branded': themeBranded  }">
        <label class="Select-standaloneLabel T2-S theme-secondary ng-binding u-visuallyHidden" ng-class="{ 'u-visuallyHidden': !themeStandaloneLabel }" for="Select an option" ng-bind="label">Select an option</label>

        <div class="Select-decoratedContainer" ng-hide="useNativeDropdown || isMobile">
            <span tabindex="0" class="Select-button">
                <span class="Select-label">Most relevant</span>
                        <svg-icon class="Select-caret theme-down ng-scope theme-small IconContainer" type="down-caret" size="sm">
                            <svg class="Icon" viewBox="0 0 16 16">
                                <use xlink:href="#thumbprinticon-down-caret_16"></use>
                            </svg>
                        </svg-icon>
                        <svg-icon class="Select-caret theme-up ng-scope theme-small IconContainer" type="up-caret" size="sm">
                            <svg class="Icon" viewBox="0 0 16 16">
                                <use xlink:href="#thumbprinticon-up-caret_16"></use>
                            </svg>
                        </svg-icon>
                        </span>
                        <ul class="Select-box" >
                            <li>Most relevant</li>
                            <li>Newest</li>
                        </ul>
                    </div>

                    <div ng-transclude="" class="Select-elementContainer ng-hide" ng-show="useNativeDropdown || isMobile">
                        <select id="sortby" name="sortby" ng-model="sortByOption.value" ng-options="
                                                sortOption.value as sortOption.label for sortOption
                                                in sortByOptions" class="ng-scope ng-pristine ng-valid" tabindex="-1">
                            <option value="0" selected="selected" label="Most relevant">Most relevant</option>
                            <option value="1" label="Newest">Newest</option>
                        </select>
                    </div>
                </div>
                </aura-select>
                </span>
            </div>
            <div class="WorkInbox">
                <ul class="ContentList" dir="rtl">
                <?php $__currentLoopData = $customerData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cust): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                <?php  
                     $decodeQuestion = json_decode($cust['questionAndOption']);
                     $options = json_decode($decodeQuestion->options);
                     
                  ?>
                        <a href="<?php echo e(URL::to('professionaolQuotes')); ?>/<?php echo e($cust['serviceId']); ?>/<?php echo e($cust['userId']); ?>" class="WorkItem Request is-unread ContentList-item ContentList-item-rightColumn ng-isolate-scope" type="submit">
                        <span class="Indicator"></span>
                        <div class="ContentList-item-column">
                            <h3 class="WorkItem-title T2-R">
                    <?php echo e($cust['name']); ?>

                </h3>

                            <span class="WorkItem-categoryAndLocation"><?php echo e($cust['serviceName']); ?>

                        
                        Los Angeles, CA 90011
                    </span>

                            <p class="WorkItem-details">
                            </p>

                            <p class="WorkItem-messagePreview theme-secondary">
                            
                            <?php  $count = count($options);
                             ?>
                            <?php for($i=0;$i<$count;$i++): ?>
                                <?php $__currentLoopData = $options[$i]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e($opt.","); ?>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endfor; ?>
                                
                            </p>
                        </div>

                        <div class="ContentList-item-column" style="text-align: left !important;">
                            <div class="WorkItem-time Request-time">
                                <span aura-time-ago="" aura-time-ago-bind="1503124522000" class="ng-isolate-scope">Aug 19 at 6:35 am</span>
                            </div>

                            <div class="WorkItem-actionDecline Request-actionDecline ">
                                <span class="pseudo-link">Pass</span>
                            </div>
                        </div>
                    </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>

                <div class="paginator">
                    <h4>3 pages <span>29 records</span></h4>
                    <div class="pages"><span class="paginator-item reverse arrow"><a class="paginator-bttn" target="_self" href="/profile/work/leads/?start=0&amp;n=10">← back</a></span> <span class="paginator-item number"><a class="paginator-bttn" target="_self" href="/profile/work/leads/?start=0&amp;n=10">1</a></span> <span class="paginator-item number"><strong class="paginator-active">2</strong></span> <span class="paginator-item number"><a class="paginator-bttn" target="_self" href="/profile/work/leads/?start=20&amp;n=10">3</a></span> <span class="paginator-item forward arrow"><a class="paginator-bttn" target="_self" href="/profile/work/leads/?start=20&amp;n=10">ahead →</a></span> </div>
                </div>
            </div>
        </div>
    </div>


    </div>

    <pa-retention-offer-status check-mark-img-url="https://static.thumbtackstatic.com/_assets/images/release/modules/pa-retention-offer-status/images/green_check_mark-8e4b4a26.svg" sorry-mark-img-url="https://static.thumbtackstatic.com/_assets/images/release/modules/pa-retention-offer-status/images/sorry_mark-0c8b0480.svg" class="ng-isolate-scope">
        <modal-standard modal-id="pa-retention-offer-status-modal" class="ng-isolate-scope" style="display: block;">
            <div class="ModalStandard" ng-class="{
            'is-visible': modalStandard.isVisible,
            'theme-opaque': modalStandard.options.themeOpaque,
            'theme-white-background': modalStandard.options.themeWhiteBackground,
        }" backdrop="">

                <button ng-hide="hideClose" class="ModalStandard-close Link" closes-modal-on-click="">

                    <svg-icon type="close" size="sm" class="ng-scope theme-small IconContainer">
                        <svg class="Icon" viewBox="0 0 16 16">
                            <use xlink:href="#thumbprinticon-close_16"></use>
                        </svg>
                    </svg-icon>
                </button>
                <div class="page-grid" backdrop="">
                    <div class="column-lg-4 column-lg-offset-1" backdrop="">
                        <div class="ModalStandard-container" backdrop="">
                            <div class="ModalStandard-contents" ng-transclude="">
                                <div class="pa-retention-offer-status ng-scope">
                                    <!-- ngIf: paRetentionOfferStatus.modeIsSuccess -->

                                    <!-- ngIf: !paRetentionOfferStatus.modeIsSuccess -->
                                    <div ng-if="!paRetentionOfferStatus.modeIsSuccess" class="ng-scope">
                                        <img class="tp-margin-bottom--double" ng-src="https://static.thumbtackstatic.com/_assets/images/release/modules/pa-retention-offer-status/images/sorry_mark-0c8b0480.svg" alt="fail_icon" src="https://static.thumbtackstatic.com/_assets/images/release/modules/pa-retention-offer-status/images/sorry_mark-0c8b0480.svg">
                                        <div class="tp-heading-4 tp-margin-bottom">
                                            Oops!
                                        </div>
                                        <div class="tp-heading-6 tp-margin-bottom--quad">
                                            It looks like you've already claimed this offer.
                                        </div>

                                        <button class="tp-button pa-retention-offer-status__button" ng-click="paRetentionOfferStatus.closeSelf()">
                                            Dismiss
                                        </button>
                                    </div>
                                    <!-- end ngIf: !paRetentionOfferStatus.modeIsSuccess -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </modal-standard>
    </pa-retention-offer-status>
    </div>
</work-leads>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.proffetionalDash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>