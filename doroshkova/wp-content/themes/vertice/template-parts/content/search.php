<div class="wp-block wp-block-kubio-query-layout  position-relative wp-block-kubio-query-layout__outer vertice-search__k__1MCYzfcZN-outer vertice-local-543-outer d-flex h-section-global-spacing align-items-lg-center align-items-md-center align-items-center" data-kubio="kubio/query-layout" id="blog-layout">
	<div class="position-relative wp-block-kubio-query-layout__inner vertice-search__k__1MCYzfcZN-inner vertice-local-543-inner h-section-grid-container h-section-boxed-container">
		<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container vertice-search__k__baLWB4dRKjp-container vertice-local-544-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-0 gutters-row-v-0" data-kubio="kubio/row">
			<div class="position-relative wp-block-kubio-row__inner vertice-search__k__baLWB4dRKjp-inner vertice-local-544-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-0 gutters-col-v-0">
				<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container vertice-search__k__kxeqsSpdy-n-container vertice-local-545-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
					<div class="position-relative wp-block-kubio-column__inner vertice-search__k__kxeqsSpdy-n-inner vertice-local-545-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-2 v-inner-2">
						<div class="position-relative wp-block-kubio-column__align vertice-search__k__kxeqsSpdy-n-align vertice-local-545-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
							<div class="wp-block wp-block-kubio-query  position-relative wp-block-kubio-query__container vertice-search__k__CtKC_EuIZL-container vertice-local-546-container" data-kubio="kubio/query">
								<div class="wp-block wp-block-kubio-query-loop  position-relative wp-block-kubio-query-loop__container vertice-search__k__vrf0UGkWrN-container vertice-local-547-container gutters-row-lg-3 gutters-row-v-lg-3 gutters-row-md-3 gutters-row-v-md-3 gutters-row-0 gutters-row-v-3" data-kubio="kubio/query-loop" data-kubio-component="masonry" data-kubio-settings="{&quot;enabled&quot;:true,&quot;targetSelector&quot;:&quot;.wp-block-kubio-query-loop__inner&quot;}">
									<div class="position-relative wp-block-kubio-query-loop__inner vertice-search__k__vrf0UGkWrN-inner vertice-local-547-inner h-row">
										<?php vertice_theme()->get( 'archive-loop' )->render(
											array(
												'view' => 'content/search/loop-item',
											)
										); ?>
									</div>
								</div>
								<?php if ( vertice_has_pagination() ) : ?>
								<div class="wp-block wp-block-kubio-query-pagination  position-relative wp-block-kubio-query-pagination__container vertice-search__k__vD7AVCTELY-container vertice-local-554-container gutters-row-lg-0 gutters-row-v-lg-2 gutters-row-md-2 gutters-row-v-md-2 gutters-row-0 gutters-row-v-2" data-kubio="kubio/query-pagination">
									<div class="position-relative wp-block-kubio-query-pagination__inner vertice-search__k__vD7AVCTELY-inner vertice-local-554-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-2 gutters-col-md-2 gutters-col-v-md-2 gutters-col-0 gutters-col-v-2">
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container vertice-search__k__tBYU0uM8Xx-container vertice-local-555-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner vertice-search__k__tBYU0uM8Xx-inner vertice-local-555-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-2 h-px-md-0 v-inner-md-2 h-px-0 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align vertice-search__k__tBYU0uM8Xx-align vertice-local-555-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
													<?php if ( vertice_has_pagination_button( true ) ) : ?>
													<div class="position-relative wp-block-kubio-pagination-nav-button__spacing vertice-search__k__ELgmeRXRD--spacing vertice-local-556-spacing">
														<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer vertice-search__k__ELgmeRXRD--outer vertice-local-556-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
															<a class="position-relative wp-block-kubio-pagination-nav-button__link vertice-search__k__ELgmeRXRD--link vertice-local-556-link h-w-100 h-global-transition" href="<?php vertice_get_navigation_button_link( true ); ?>">
																<span class="position-relative wp-block-kubio-pagination-nav-button__text vertice-search__k__ELgmeRXRD--text vertice-local-556-text kubio-inherit-typography">
																	<?php esc_html_e( 'Previous', 'vertice' ); ?>
																</span>
															</a>
														</span>
													</div>
													<?php endif; ?>
												</div>
											</div>
										</div>
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container vertice-search__k__P2OarhUKUK-container vertice-local-557-container d-flex h-col-lg h-col-md h-col" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner vertice-search__k__P2OarhUKUK-inner vertice-local-557-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-1 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align vertice-search__k__P2OarhUKUK-align vertice-local-557-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
													<div class="wp-block wp-block-kubio-pagination-numbers  position-relative wp-block-kubio-pagination-numbers__outer vertice-search__k__tRiQFlrj8q-outer vertice-local-558-outer" data-kubio="kubio/pagination-numbers">
														<?php vertice_pagination_numbers(); ?>
													</div>
												</div>
											</div>
										</div>
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container vertice-search__k__2nd5yuWmz9-container vertice-local-559-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner vertice-search__k__2nd5yuWmz9-inner vertice-local-559-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-2 h-px-md-0 v-inner-md-2 h-px-0 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align vertice-search__k__2nd5yuWmz9-align vertice-local-559-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
													<?php if ( vertice_has_pagination_button() ) : ?>
													<div class="position-relative wp-block-kubio-pagination-nav-button__spacing vertice-search__k__ACSe8L2gsX-spacing vertice-local-560-spacing">
														<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer vertice-search__k__ACSe8L2gsX-outer vertice-local-560-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
															<a class="position-relative wp-block-kubio-pagination-nav-button__link vertice-search__k__ACSe8L2gsX-link vertice-local-560-link h-w-100 h-global-transition" href="<?php vertice_get_navigation_button_link(); ?>">
																<span class="position-relative wp-block-kubio-pagination-nav-button__text vertice-search__k__ACSe8L2gsX-text vertice-local-560-text kubio-inherit-typography">
																	<?php esc_html_e( 'Next', 'vertice' ); ?>
																</span>
															</a>
														</span>
													</div>
													<?php endif; ?>
												</div>
											</div>
										</div>
									</div>
								</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
