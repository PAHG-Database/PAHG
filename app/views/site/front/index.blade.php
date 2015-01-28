@extends('site.layouts.default')
{{-- Content --}}
@section('content')
<div class="row">
	<h1 class="text-center">HOX GENE Search Page</h1>
	<div class="well">
		<form class="form-inline">
			<div class="form-group">
		    	<label for="exampleInputName2">Choose from the list of HOX Gene Families</label>
		    	<!--<input type="text" class="form-control" data-provide="typeahead" size="100">-->
		    	<select id="family">
					<option value="">Amiloride-sensitive cation channel, neuronal</option>
					<option value="">Anion exchanger family SLC4A ( AE )</option>
					<option value="">ATP binding cassette</option>
					<option value="">ATP synthase, H+ transporting, mitochondrial F0 complex</option>
					<option value="">ATPase, H+ transporting, lysosomal V0 Subunit A</option>
					<option value="">Bromodomain adjacent to zinc finger domain</option>
					<option value="">Calcium binding and coiled-coil domain</option>
					<option value="">Calcium channel, voltage-dependent, beta subunit</option>
					<option value="">CAP-GLY domain containing linker protein</option>
					<option value="">Carbohydrate sulfotransferase</option>
					<option value="">Chaperonin containing T-complex polypeptide 1</option>
					<option value="">Chromobox homolog</option>
					<option value="">Crystallin family</option>
					<option value="">Cyclin-dependent kinase</option>
					<option value="">ERBB receptor protein-tyrosine kinase</option>
					<option value="">Fbrillar collagen family</option>
					<option value="">FK506 binding protein</option>
					<option value="">Formin-like</option>
					<option value="">Frizzled</option>
					<option value="">GLI zinc-finger protein family</option>
					<option value="">Growth factor receptor-bound protein</option>
					<option value="">Hedgehog family</option>
					<option value="">Heterogeneous nuclear ribonucleoprotein A</option>
					<option value="">Histone deacetylase</option>
					<option value="">Inhibin</option>
					<option value="">Inhibitor of growth family</option>
					<option value="">Insulin-like growth factor-binding protein</option>
					<option value="">Integrin alpha family</option>
					<option value="">Integrin beta chain family</option>
					<option value="">Methyltransferase</option>
					<option value="">MLX interacting protein</option>
					<option value="">Myosin 1</option>
					<option value="">Myosin light chain</option>
					<option value="">NAC alpha domain proteins</option>
					<option value="">Neurexophilin </option>
					<option value="">Neurogenic differentiation</option>
					<option value="">Nuclear factor (erythroid-derived 2)</option>
					<option value="">ORM1-like</option>
					<option value="">Oxysterol binding protein-like</option>
					<option value="">Phosphodiesterase 1, Calmodulin-dependent</option>
					<option value="">Pleckstrin homology domain containing, family A</option>
					<option value="">Potassium inwardly-rectifying channel, subfamily J</option>
					<option value="">Potassium voltage-gated channel, subfamily H</option>
					<option value="">Protein kinase gamma subunit</option>
					<option value="">Protein phosphatase 1, regulatory (inhibitor)subunit</option>
					<option value="">Pyruvate dehydrogenase kinase</option>
					<option value="">Rap guanine nucleotide exchange factor</option>
					<option value="">Receptor (G protein-coupled) activity modifying protein</option>
					<option value="">Rho family GTPase</option>
					<option value="">Ring finger protein family</option>
					<option value="">Secernin</option>
					<option value="">Solute carrier family  6</option>
					<option value="">Solute carrier family 38A</option>
					<option value="">Sorting nexin</option>
					<option value="">Sp1 c2h2-type zinc-finger protein family</option>
					<option value="">Suppressor of cytokine signaling</option>
					<option value="">Tensin</option>
					<option value="">Transmembrane protein 106</option>
					<option value="">Vesicle-associated membrane protein </option>
					<option value="">WAS/WASL interacting protein family</option>
					<option value="">Zinc finger protein 386</option>
					<option value="">Zinc finger protein, subfamily 1A</option>
			    </select>
		  	</div>
		</form>
    </div>
</div>
@stop