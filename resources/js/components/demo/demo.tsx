import React from 'react';
import {Link} from 'react-router-dom';
import Header from '../header/header';
import Footer from '../footer/footer';
import {AppRoute} from '../../const';

function Demo() {
	return (
		<React.Fragment>
			<Header />
			<main className="main-rgl">
				<h1 className="visually-hidden">Список игр</h1>
				<div className="demo">
					<div className="container">
						<div className="demo__text-wrapper">
							<p className="demo__text">
								Это демонстрационная версия. После перезагрузки страницы все созданные данные не сохранятся.
							</p>
							<p className="demo__text">
								Здесь можно добавлять платформы, колонки учета и тип носителя игры: цифровая или физическая копия. В
								будущем планируется добавить больше фич.
							</p>
							<p className="demo__text">
								Итак, вы купили свою первую игру на новой консоли. Через год Вы уже будете мечтать о том, что на пенсии уж
								точно все 100500 игр в списке будут пройдены.
							</p>
						</div>
						<div className="demo__start-wrapper">
							<Link to={AppRoute.SETTINGS_DEMO} className="gb-btn demo__start" type="button">
								<span>Начать учитывать</span>
							</Link>
							<Link to={AppRoute.LIST_DEMO} className="gb-btn demo__start" type="button">
								<span>Просто покажите уже этот ваш список игр!</span>
							</Link>
						</div>
					</div>
				</div>
			</main>
			<Footer />
		</React.Fragment>
	);
}

export default Demo;
