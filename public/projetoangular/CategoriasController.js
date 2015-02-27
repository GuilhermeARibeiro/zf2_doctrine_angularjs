categorias
	.controller('CategoriasController',
		['$scope', 'CategoriasSrv',
			function($scope, CategoriasSrv) {
				$scope.nome = "Guilherme";

				$scope.load = function() {
					$scope.registros = CategoriasSrv.query();
				}
				$scope.load();
			}
		]
);