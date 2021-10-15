import React from 'react';
import Header from '../header/header';
import Footer from '../footer/footer';
import Tools from '../tools/tools';

function Table() {
	return (
		<React.Fragment>
			<Header />
			<main className="main-rgl">
				<h1 className="visually-hidden">Список игр</h1>
				<div className="platform">
					<div className="container">
						<Tools />
						<div className="table">
							<div className="table__wrapper">
								<table className="table__content">
									<thead>
										<tr>
											<th>
												<div className="table__th">
													Название
												</div>
											</th>
											<th>
												<div tabIndex={0} className="table__th table__th--sortable">
													Тип
												</div>
											</th>
											<th>
												<div tabIndex={0} data-sort="asc" className="table__th table__th--sortable">
													Платформа
												</div>
											</th>
											<th>
												<div tabIndex={0} data-sort="desc" className="table__th table__th--sortable">
													Статус
												</div>
											</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												Zelda
											</td>
											<td className="table__exist-type">
												<svg width={14} height={14}>
													<use xlinkHref="#icon-physic" />
												</svg>
											</td>
											<td>
												Nintendo Switch
											</td>
											<td>
												Done
											</td>
										</tr>
										<tr>
											<td>
												Metroid
											</td>
											<td className="table__exist-type">
												<svg width={14} height={14}>
													<use xlinkHref="#icon-digital" />
												</svg>
											</td>
											<td>
												Nintendo Switch
											</td>
											<td>
												Not Begin
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</main>

			<Footer />
		</React.Fragment>
	)
}

export default Table;
