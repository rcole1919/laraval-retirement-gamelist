import React from 'react';

function AddedItem ({name, type}) {

	return (
		<span className="add__added-title">
			<span title="Переименовать" tabIndex={0} className="add__added-text">{name}</span>
			<button data-type={type} title="Удалить" className="add__added-delete" type="button">
				<svg width={10} height={10}>
					<use xlinkHref="#icon-edit-close" />
				</svg>
			</button>
		</span>
	)
}

export default AddedItem;
