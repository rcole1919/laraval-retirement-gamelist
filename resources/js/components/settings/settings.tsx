import React from 'react';
import Header from '../header/header';
import Footer from '../footer/footer';

function Settings() {
	return (
		<React.Fragment>
			<Header />
			<main className="main-rgl">
				<h1 className="visually-hidden">Список игр</h1>
				<div className="add">
					<div className="container">
						<div className="add__form">
							<div className="add__item">
								<div className="add__field-wrapper">
									<label htmlFor="add-console" className="add__label">Добавить консоль</label>
									<div className="add__input-wrapper">
										<input type="text" id="add-console" className="add__input" />
									</div>
									<button type="button" className="add__button" />
								</div>
								<div className="add__added-wrapper">
									<span className="add__added-title">
										<span title="Переименовать" tabIndex={0} className="add__added-text">Not begin</span>
										<button title="Удалить" className="add__added-delete" type="button">
											<svg width={10} height={10}>
												<use xlinkHref="#icon-edit-close" />
											</svg>
										</button>
									</span>
									<span className="add__added-title">
										<span title="Переименовать" tabIndex={0} className="add__added-text">Not begin</span>
										<button title="Удалить" className="add__added-delete" type="button">
											<svg width={10} height={10}>
												<use xlinkHref="#icon-edit-close" />
											</svg>
										</button>
									</span>
									<span className="add__added-title">
										<span title="Переименовать" tabIndex={0} className="add__added-text">Not begin</span>
										<button title="Удалить" className="add__added-delete" type="button">
											<svg width={10} height={10}>
												<use xlinkHref="#icon-edit-close" />
											</svg>
										</button>
									</span>
								</div>
							</div>
							<div className="add__item">
								<div className="add__field-wrapper">
									<label htmlFor="add-column" className="add__label">Добавить колонку</label>
									<div className="add__input-wrapper">
										<input type="text" id="add-column" className="add__input" />
									</div>
									<button type="button" className="add__button" />
								</div>
								<div className="add__added-wrapper">
									<span className="add__added-title">
										<span title="Переименовать" tabIndex={0} className="add__added-text">Not begin</span>
										<button title="Удалить" className="add__added-delete" type="button">
											<svg width={10} height={10}>
												<use xlinkHref="#icon-edit-close" />
											</svg>
										</button>
									</span>
									<span className="add__added-title">
										<span title="Переименовать" tabIndex={0} className="add__added-text">Not begin</span>
										<button title="Удалить" className="add__added-delete" type="button">
											<svg width={10} height={10}>
												<use xlinkHref="#icon-edit-close" />
											</svg>
										</button>
									</span>
									<span className="add__added-title">
										<span title="Переименовать" tabIndex={0} className="add__added-text">Not begin</span>
										<button title="Удалить" className="add__added-delete" type="button">
											<svg width={10} height={10}>
												<use xlinkHref="#icon-edit-close" />
											</svg>
										</button>
									</span>
								</div>
							</div>
							<button className="add__submit" type="button">Сформировать таблицы</button>
						</div>
					</div>
				</div>
			</main>
			<Footer />
		</React.Fragment>
	)
}

export default Settings;
