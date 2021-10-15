import React from 'react';
import Header from '../header/header';
import Footer from '../footer/footer';
import Tools from '../tools/tools';

function List() {
	return (
		<React.Fragment>
			<Header />
			<main className="main-rgl">
				<h1 className="visually-hidden">Список игр</h1>
				<div className="platform">
					<div className="container">
						<Tools />
						<div className="platform__list">
							<article className="platform__item">
								<div className="platform__head" tabIndex={0}>
									<h2 className="platform__title platform__title--open">
										Nintendo Switch
									</h2>
								</div>
								<div className="column">
									<div className="column__item">
										<div className="column__head">
											<div className="column__title">
												Done
											</div>
											<div className="column__count-wrapper">
												<div className="column__count">
													<svg width={15} height={11}>
														<use xlinkHref="#icon-digital" />
													</svg>
													<span className="column__count-value">34</span>
												</div>
												<div className="column__count">
													<svg width={12} height={12}>
														<use xlinkHref="#icon-physic" />
													</svg>
													<span className="column__count-value">45</span>
												</div>
											</div>
										</div>
										<div className="column__body">
											<div className="game">
												<div className="game__head">
													<div className="game__title">
														<div className="game__exist-type">
															<svg width={15} height={11}>
																<use xlinkHref="#icon-digital" />
															</svg>
														</div>
														<span>Zelda</span>
													</div>
													<button className="game__edit-btn" aria-label="Редактировать">
														<svg width={16} height={13}>
															<use xlinkHref="#icon-edit-game" />
														</svg>
													</button>
												</div>
											</div>
											<div className="game">
												<div className="game__head game__head--open">
													<div className="game__title">
														<div className="game__exist-type">
															<svg width={12} height={12}>
																<use xlinkHref="#icon-physic" />
															</svg>
														</div>
														<span>Zelda</span>
													</div>
													<button className="game__edit-btn" aria-label="Редактировать">
														<svg width={12} height={12}>
															<use xlinkHref="#icon-edit-close" />
														</svg>
													</button>
												</div>
												<div className="game__edit-popup game-edit">
													<div className="game-edit__item game-edit__item--open">
														<button className="game-edit__title" type="button">
															<span>
																Change column
															</span>
															<div className="game-edit__dropdown-icon">
																<svg width={8} height={5}>
																	<use xlinkHref="#icon-dropdown-select" />
																</svg>
															</div>
														</button>
														<div className="game-edit__dropdown-list">
															<button className="game-edit__dropdown-item" type="button">Active</button>
															<button className="game-edit__dropdown-item" type="button">Not begin</button>
														</div>
													</div>
													<div className="game-edit__item">
														<button type="button" className="game-edit__title">
															<span>
																Delete
															</span>
														</button>
														<div className="game-edit__sure">
															<span className="game-edit__sure-text">Вы уверены?</span>
															<button type="button" className="game-edit__sure-button">
																<svg width={16} height={12}>
																	<use xlinkHref="#icon-ok" />
																</svg>
															</button>
															<button type="button" className="game-edit__sure-button">
																<svg width={12} height={12}>
																	<use xlinkHref="#icon-edit-close" />
																</svg>
															</button>
														</div>
													</div>
													<div className="game-edit__item">
														<button type="button" className="game-edit__title">
															<span>
																Edit
															</span>
														</button>
													</div>
												</div>
											</div>
											<div className="game">
												<div className="game__head game__head--physic game__head--open">
													<div className="game__exist-type">
														<svg width={15} height={11}>
															<use xlinkHref="#icon-digital" />
														</svg>
													</div>
													<span>Metroid</span>
													<button className="game__edit-btn" aria-label="Редактировать">
														<svg width={12} height={12}>
															<use xlinkHref="#icon-edit-close" />
														</svg>
													</button>
												</div>
												<div className="game__edit-popup game-edit">
													<div className="game-edit__item game-edit__input">
														<label className="game-edit__input-label" htmlFor="title">Title:</label>
														<div className="game-edit__input-wrapper">
															<input className="game-edit__input-enter" type="text" defaultValue="Metroid" id="title" />
														</div>
													</div>
													<div className="game-edit__item">
														<button className="game-edit__title" type="button">
															<span>
																Platform
															</span>
															<div className="game-edit__dropdown-icon">
																<svg width={8} height={5}>
																	<use xlinkHref="#icon-dropdown-select" />
																</svg>
															</div>
														</button>
														<div className="game-edit__dropdown-list">
															<button className="game-edit__dropdown-item" type="button">Nintendo Switch</button>
															<button className="game-edit__dropdown-item" type="button">PS4</button>
														</div>
													</div>
													<div className="game-edit__item game-edit__radio">
														<div className="game-edit__radio-item">
															<input className="game-edit__radio-input visually-hidden" type="radio" id="digital-type" name="exist-type" defaultValue="digital" defaultChecked />
															<label className="game-edit__radio-label" htmlFor="digital-type">Digital</label>
														</div>
														<div className="game-edit__radio-item">
															<input className="game-edit__radio-input visually-hidden" type="radio" id="physic-type" name="exist-type" defaultValue="physic" />
															<label className="game-edit__radio-label" htmlFor="physic-type">Physic</label>
														</div>
													</div>
												</div>
											</div>
											<button type="button" className="column__add-game" title="Добавить игру">
												<svg width={15} height={15}>
													<use xlinkHref="#icon-add-game" />
												</svg>
											</button>
										</div>
									</div>
									<div className="column__item">
										<div className="column__head">
											<div className="column__title">
												Active
											</div>
											<div className="column__count-wrapper">
												<div className="column__count">
													<svg width={15} height={11}>
														<use xlinkHref="#icon-digital" />
													</svg>
													<span className="column__count-value">34</span>
												</div>
												<div className="column__count">
													<svg width={12} height={12}>
														<use xlinkHref="#icon-physic" />
													</svg>
													<span className="column__count-value">45</span>
												</div>
											</div>
										</div>
										<div className="column__body">
											<div className="game">
												<div className="game__head">
													<div className="game__title">
														<div className="game__exist-type">
															<svg width={15} height={11}>
																<use xlinkHref="#icon-digital" />
															</svg>
														</div>
														<span>Zelda</span>
													</div>
													<button className="game__edit-btn" aria-label="Редактировать">
														<svg width={16} height={13}>
															<use xlinkHref="#icon-edit-game" />
														</svg>
													</button>
												</div>
											</div>
											<div className="game">
												<div className="game__head">
													<div className="game__title">
														<div className="game__exist-type">
															<svg width={12} height={12}>
																<use xlinkHref="#icon-physic" />
															</svg>
														</div>
														<span>Zelda</span>
													</div>
													<button className="game__edit-btn" aria-label="Редактировать">
														<svg width={12} height={12}>
															<use xlinkHref="#icon-edit-close" />
														</svg>
													</button>
												</div>
											</div>
											<div className="game">
												<div className="game__head">
													<div className="game__exist-type">
														<svg width={15} height={11}>
															<use xlinkHref="#icon-digital" />
														</svg>
													</div>
													<span>Metroid</span>
													<button className="game__edit-btn" aria-label="Редактировать">
														<svg width={12} height={12}>
															<use xlinkHref="#icon-edit-close" />
														</svg>
													</button>
												</div>
											</div>
											<button type="button" className="column__add-game" title="Добавить игру">
												<svg width={15} height={15}>
													<use xlinkHref="#icon-add-game" />
												</svg>
											</button>
										</div>
									</div>
									<div className="column__item">
										<div className="column__head">
											<div className="column__title">
												Active
											</div>
											<div className="column__count-wrapper">
												<div className="column__count">
													<svg width={15} height={11}>
														<use xlinkHref="#icon-digital" />
													</svg>
													<span className="column__count-value">34</span>
												</div>
												<div className="column__count">
													<svg width={12} height={12}>
														<use xlinkHref="#icon-physic" />
													</svg>
													<span className="column__count-value">45</span>
												</div>
											</div>
										</div>
										<div className="column__body">
											<div className="game">
												<div className="game__head">
													<div className="game__title">
														<div className="game__exist-type">
															<svg width={15} height={11}>
																<use xlinkHref="#icon-digital" />
															</svg>
														</div>
														<span>Zelda</span>
													</div>
													<button className="game__edit-btn" aria-label="Редактировать">
														<svg width={16} height={13}>
															<use xlinkHref="#icon-edit-game" />
														</svg>
													</button>
												</div>
											</div>
											<div className="game">
												<div className="game__head">
													<div className="game__title">
														<div className="game__exist-type">
															<svg width={12} height={12}>
																<use xlinkHref="#icon-physic" />
															</svg>
														</div>
														<span>Zelda</span>
													</div>
													<button className="game__edit-btn" aria-label="Редактировать">
														<svg width={12} height={12}>
															<use xlinkHref="#icon-edit-close" />
														</svg>
													</button>
												</div>
											</div>
											<div className="game">
												<div className="game__head">
													<div className="game__exist-type">
														<svg width={15} height={11}>
															<use xlinkHref="#icon-digital" />
														</svg>
													</div>
													<span>Metroid</span>
													<button className="game__edit-btn" aria-label="Редактировать">
														<svg width={12} height={12}>
															<use xlinkHref="#icon-edit-close" />
														</svg>
													</button>
												</div>
											</div>
											<button type="button" className="column__add-game" title="Добавить игру">
												<svg width={15} height={15}>
													<use xlinkHref="#icon-add-game" />
												</svg>
											</button>
										</div>
									</div>
									<div className="column__item">
										<div className="column__head">
											<div className="column__title">
												Active
											</div>
											<div className="column__count-wrapper">
												<div className="column__count">
													<svg width={15} height={11}>
														<use xlinkHref="#icon-digital" />
													</svg>
													<span className="column__count-value">34</span>
												</div>
												<div className="column__count">
													<svg width={12} height={12}>
														<use xlinkHref="#icon-physic" />
													</svg>
													<span className="column__count-value">45</span>
												</div>
											</div>
										</div>
										<div className="column__body">
											<div className="game">
												<div className="game__head">
													<div className="game__title">
														<div className="game__exist-type">
															<svg width={15} height={11}>
																<use xlinkHref="#icon-digital" />
															</svg>
														</div>
														<span>Zelda</span>
													</div>
													<button className="game__edit-btn" aria-label="Редактировать">
														<svg width={16} height={13}>
															<use xlinkHref="#icon-edit-game" />
														</svg>
													</button>
												</div>
											</div>
											<div className="game">
												<div className="game__head">
													<div className="game__title">
														<div className="game__exist-type">
															<svg width={12} height={12}>
																<use xlinkHref="#icon-physic" />
															</svg>
														</div>
														<span>Zelda</span>
													</div>
													<button className="game__edit-btn" aria-label="Редактировать">
														<svg width={12} height={12}>
															<use xlinkHref="#icon-edit-close" />
														</svg>
													</button>
												</div>
											</div>
											<div className="game">
												<div className="game__head">
													<div className="game__exist-type">
														<svg width={15} height={11}>
															<use xlinkHref="#icon-digital" />
														</svg>
													</div>
													<span>Metroid</span>
													<button className="game__edit-btn" aria-label="Редактировать">
														<svg width={12} height={12}>
															<use xlinkHref="#icon-edit-close" />
														</svg>
													</button>
												</div>
											</div>
											<button type="button" className="column__add-game" title="Добавить игру">
												<svg width={15} height={15}>
													<use xlinkHref="#icon-add-game" />
												</svg>
											</button>
										</div>
									</div>
									<div className="column__item">
										<div className="column__head">
											<div className="column__title">
												Active
											</div>
											<div className="column__count-wrapper">
												<div className="column__count">
													<svg width={15} height={11}>
														<use xlinkHref="#icon-digital" />
													</svg>
													<span className="column__count-value">34</span>
												</div>
												<div className="column__count">
													<svg width={12} height={12}>
														<use xlinkHref="#icon-physic" />
													</svg>
													<span className="column__count-value">45</span>
												</div>
											</div>
										</div>
										<div className="column__body">
											<div className="game">
												<div className="game__head">
													<div className="game__title">
														<div className="game__exist-type">
															<svg width={15} height={11}>
																<use xlinkHref="#icon-digital" />
															</svg>
														</div>
														<span>Zelda</span>
													</div>
													<button className="game__edit-btn" aria-label="Редактировать">
														<svg width={16} height={13}>
															<use xlinkHref="#icon-edit-game" />
														</svg>
													</button>
												</div>
											</div>
											<div className="game">
												<div className="game__head">
													<div className="game__title">
														<div className="game__exist-type">
															<svg width={12} height={12}>
																<use xlinkHref="#icon-physic" />
															</svg>
														</div>
														<span>Zelda</span>
													</div>
													<button className="game__edit-btn" aria-label="Редактировать">
														<svg width={12} height={12}>
															<use xlinkHref="#icon-edit-close" />
														</svg>
													</button>
												</div>
											</div>
											<div className="game">
												<div className="game__head">
													<div className="game__exist-type">
														<svg width={15} height={11}>
															<use xlinkHref="#icon-digital" />
														</svg>
													</div>
													<span>Metroid</span>
													<button className="game__edit-btn" aria-label="Редактировать">
														<svg width={12} height={12}>
															<use xlinkHref="#icon-edit-close" />
														</svg>
													</button>
												</div>
											</div>
											<button type="button" className="column__add-game" title="Добавить игру">
												<svg width={15} height={15}>
													<use xlinkHref="#icon-add-game" />
												</svg>
											</button>
										</div>
									</div>
								</div>
							</article>
							<article className="platform">
								<div className="platform__head platform__head--open" tabIndex={0}>
									<h2 className="platform__title">
										Nintendo Switch
									</h2>
								</div>
							</article>
						</div>
					</div>
				</div>
			</main>

			<Footer />
		</React.Fragment>
	)
}

export default List;
