import React from 'react';
import Header from '../header/header';
import Footer from '../footer/footer';
import { connect } from 'react-redux';
import AddFormItem from '../add-form-item/add-form-item';
import {AddTitle, AddType} from '../../const';

function Settings({platforms, categories}) {
	return (
		<React.Fragment>
			<Header />
			<main className="main-rgl">
				<h1 className="visually-hidden">Список игр</h1>
				<div className="add">
					<div className="container">
						<div className="add__form">
							<AddFormItem title={AddTitle.ADD_PLATFORM} column={platforms} type={AddType.PLATFORMS} />
							<AddFormItem title={AddTitle.ADD_CATEGORY} column={categories} type={AddType.CATEGORIES} />
							<button className="add__submit" type="button">Сформировать таблицы</button>
						</div>
					</div>
				</div>
			</main>
			<Footer />
		</React.Fragment>
	)
}

const mapStateToProps = (state) => ({
	platforms: state.platforms,
	categories: state.categories,
});

export { Settings };
export default connect(mapStateToProps)(Settings);
