<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('icon')->nullable();
            $table->integer('parent_id')->nullable();
            $table->integer('section')->default(1);
            $table->boolean('active')->default(true);
            $table->timestamps();
        });

        $categories = [
            [
                'name' => 'Cardiología',
                'slug' => 'cardiologia',
                'icon' => 'icon-heart.svg'
            ],
            [
                'name' => 'Dermatología',
                'slug' => 'dermatologia',
                'icon' => 'icon-dermatology'
            ],
            [
                'name' => 'Trastornos del desarrollo (citogenética)',
                'slug' => 'trastornos-de-desarrollo',
                'icon' => 'icon-cytogenetics.svg'
            ],
            [
                'name' => 'Endocrinología',
                'slug' => 'endocrinologia',
                'icon' => 'icon-endocrinology.svg'
            ],
            [
                'name' => 'Exoma',
                'slug' => 'exoma',
                'icon' => 'icon-exome.svg'
            ],
            [
                'name' => 'Hematología',
                'slug' => 'hematologia',
                'icon' => 'icon-blood.svg'
            ],
            [
                'name' => 'Cancer hereditario',
                'slug' => 'cancer-hereditario',
                'icon' => 'icon-cancer.svg'
            ],
            [
                'name' => 'Inmunología',
                'slug' => 'inmunologia',
                'icon' => 'icon-immunology.svg'
            ],
            [
                'name' => 'Trastornos metabólicos y exámenes de detección de recién nacidos',
                'slug' => 'trastornos-metabolicos-examenes-deteccion-recien-nacidos',
                'icon' => 'icon-metabolic.svg'
            ],
            [
                'name' => 'Enfermedad residual mínima (MRD)',
                'slug' => 'enfermedad-residual-minima',
                'icon' => 'icon-sample-analysis_Cobalt80px.svg'
            ],
            [
                'name' => 'Nefrología',
                'slug' => 'nefrologia',
                'icon' => 'icon-nephrology.svg'
            ],
            [
                'name' => 'Neurología',
                'slug' => 'neurologia',
                'icon' => 'icon-brain.svg'
            ],
            [
                'name' => 'Genética pediátrica',
                'slug' => 'genetica-pediatrica',
                'icon' => 'icon-pediatrics.svg'
            ],
            [
                'name' => 'Farmacogenómica',
                'slug' => 'farmacogenomica',
                'icon' => 'icon-medicine-cobalt.svg'
            ],
            [
                'name' => 'Detección de portadores',
                'slug' => 'deteccion-portadores',
                'icon' => 'icon-carrier-bermuda.svg',
                'section' => 2
            ],
            [
                'name' => 'Pruebas de fertilidad',
                'slug' => 'pruebas-fertilidad',
                'icon' => 'icon-infertility-bermuda__1_.svg',
                'section' => 2
            ],
            [
                'name' => 'Exámenes prenatales no invasivos',
                'slug' => 'examenes-prenatales-no-invasivos',
                'icon' => 'icon-nips.svg',
                'section' => 2
            ],
            [
                'name' => 'Salud proactiva',
                'slug' => 'salud-proactiva',
                'icon' => 'icon-apple.svg',
                'section' => 3
            ],
            [
                'name' => 'Arritmia y miocardiopatía',
                'slug' => 'arritmia-miocardiopatia',
                'parent_id' => 1
            ],
            [
                'name' => 'Arritmia',
                'slug' => 'arritmia',
                'parent_id' => 1
            ],
            [
                'name' => 'Miocardiopatia',
                'slug' => 'miocardiopatia',
                'parent_id' => 1
            ],
            [
                'name' => 'Cardiopatía congénita',
                'slug' => 'cardiopatia-congenita',
                'parent_id' => 1
            ],
            [
                'name' => 'Telangiectasia hemorrágica hereditaria y malformaciones vasculares',
                'slug' => 'telangiectasia-hemorragica-hereditaria',
                'parent_id' => 1
            ],
            [
                'name' => 'Trastornos lipídicos',
                'slug' => 'trastornos-lipidicos',
                'parent_id' => 1
            ],
            [
                'name' => 'Hipertensión pulmonar',
                'slug' => 'hipertension-pulmonar',
                'parent_id' => 1
            ],
            [
                'name' => 'Aortopatía',
                'slug' => 'aortopatia',
                'parent_id' => 1
            ],
            [
                'name' => 'Dermatología Síndromes de Cáncer',
                'slug' => 'dermatologia-sindromes-cancer',
                'parent_id' => 2
            ],
            [
                'name' => 'Trastornos de la piel',
                'slug' => 'trastornos-piel',
                'parent_id' => 2
            ],
            [
                'name' => 'Trastornos del desarrollo (citogenética)',
                'slug' => 'trastornos-desarrollo',
                'parent_id' => 3
            ],
            [
                'name' => 'Trastornos del desarrollo sexual / Endocrinología',
                'slug' => 'trastornos-desarrollo-sexual-endocrinologia',
                'parent_id' => 4
            ],
            [
                'name' => 'Obesidad',
                'slug' => 'obesidad',
                'parent_id' => 4
            ],
            [
                'name' => 'Condiciones de tiroides y paratiroides',
                'slug' => 'condiciones-tiroides-paratiroides',
                'parent_id' => 4
            ],
            [
                'name' => 'Metabolismo de la glucosa',
                'slug' => 'metabolismo-glucosa',
                'parent_id' => 4
            ],
            [
                'name' => 'Trastornos de mineralización ósea',
                'slug' => 'transtornos-mmineralizacion-osea',
                'parent_id' => 4
            ],
            [
                'name' => 'Homocromatosis hereditaria',
                'slug' => 'homocromatosis-hereditaria',
                'parent_id' => 6
            ],
            [
                'name' => 'Trombofilia hereditaria',
                'slug' => 'trombofilia-hereditaria',
                'parent_id' => 6
            ],
            [
                'name' => 'Trastornos plaquetarios',
                'slug' => 'trastornos-plaquetarios',
                'parent_id' => 6
            ],
            [
                'name' => 'Anemia',
                'slug' => 'anemia',
                'parent_id' => 6
            ],
            [
                'name' => 'Eritrocitosis familiar',
                'slug' => 'eritrocitosis-familiar',
                'parent_id' => 6
            ],
            [
                'name' => 'Síndrome urémico hemolítico atípico y microangiopatías trombóticas',
                'slug' => 'sindrome-uremico-hemolitico-atipico-microangiopatias-tromboticas',
                'parent_id' => 6
            ],
            [
                'name' => 'Síndromes de insuficiencia de la médula ósea',
                'slug' => 'sindromes-insuficiencia-medula-osea',
                'parent_id' => 6
            ],
            [
                'name' => 'Neoplasias mieloproliferativas',
                'slug' => 'neoplasias-mieloproliferativas',
                'parent_id' => 6
            ],
            [
                'name' => 'Paneles de cáncer cruzado',
                'slug' => 'paneles-cancer-cruzado',
                'parent_id' => 7
            ],
            [
                'name' => 'Paneles de cáncer de tumor sólido hereditario',
                'slug' => 'paneles-cancer-tumor-solido-hereditario',
                'parent_id' => 7
            ],
            [
                'name' => 'Paneles relacionados con el tratamiento',
                'slug' => 'paneles-relacionados-tratamiento',
                'parent_id' => 7
            ],
            [
                'name' => 'Oncología pediátrica',
                'slug' => 'oncologia-pediatrica',
                'parent_id' => 7
            ],
            [
                'name' => 'Condiciones individuales de cáncer hereditario',
                'slug' => 'condiciones-individuales-cancer-hereditario',
                'parent_id' => 7
            ],
            [
                'name' => 'Paneles de cáncer hematológico hereditario',
                'slug' => 'paneles-cancer-hematologico-hereditario',
                'parent_id' => 7
            ],
            [
                'name' => 'Paneles de ARN',
                'slug' => 'paneles-arn',
                'parent_id' => 7
            ],
            [
                'name' => 'Trastornos de la biología de los telómeros',
                'slug' => 'trastornos-biologia-telomeros',
                'parent_id' => 8
            ],
            [
                'name' => 'Inmunodeficiencia primaria',
                'slug' => 'inmunodeficiencia-primaria',
                'parent_id' => 8
            ],
            [
                'name' => 'Deficiencia de anticuerpos',
                'slug' => 'deficiencia-anticuerpos',
                'parent_id' => 8
            ],
            [
                'name' => 'Síndromes autoinflamatorios',
                'slug' => 'sindromes-autoinflamatorios',
                'parent_id' => 8
            ],
            [
                'name' => 'Deficiencias combinadas de células T/B',
                'slug' => 'deficiencias-combinadas-celular-tb',
                'parent_id' => 8
            ],
            [
                'name' => 'Desregulación inmune',
                'slug' => 'desregulacion-inmune',
                'parent_id' => 8
            ],
            [
                'name' => 'Defectos fagocíticos',
                'slug' => 'defectos-fagociticos',
                'parent_id' => 8
            ],
            [
                'name' => 'Angioedema hereditario',
                'slug' => 'angioedema-hereditario',
                'parent_id' => 8
            ],
            [
                'name' => 'Deficiencias del complemento',
                'slug' => 'deficiencias-complemento',
                'parent_id' => 8
            ],
            [
                'name' => 'Diarrea congénita',
                'slug' => 'diarrea-congenita',
                'parent_id' => 8
            ],
            [
                'name' => 'Trastornos metabólicos Confirmación de la detección del recién nacido',
                'slug' => 'trastornos-metabolicos-confirmacion-deteccion-recien-nacido',
                'parent_id' => 9
            ],
            [
                'name' => 'Paneles de Analyte',
                'slug' => 'paneles-analyte',
                'parent_id' => 9
            ],
            [
                'name' => 'Aminoacidopatías',
                'slug' => 'aminoacidopatias',
                'parent_id' => 9
            ],
            [
                'name' => 'Trastornos de carbohidratos',
                'slug' => 'trastornos-carbohidratos',
                'parent_id' => 9
            ],
            [
                'name' => 'Trastornos congénitos de la glicosilación',
                'slug' => 'trastornos-congenitos-glicosilacion',
                'parent_id' => 9
            ],
            [
                'name' => 'Defectos de oxidación de ácidos grasos',
                'slug' => 'cefectos-oxidacion-acidos-grasos',
                'parent_id' => 9
            ],
            [
                'name' => 'Trastornos del almacenamiento lisosomal',
                'slug' => 'trastornos-almacenamiento-lisosomal',
                'parent_id' => 9
            ],
            [
                'name' => 'Trastornos del transporte de metales',
                'slug' => 'trastornos-transporte-metales',
                'parent_id' => 9
            ],
            [
                'name' => 'Acidemias orgánicas',
                'slug' => 'acidemias-organicas',
                'parent_id' => 9
            ],
            [
                'name' => 'Trastornos del ciclo de la urea',
                'slug' => 'trastornos-ciclo-urea',
                'parent_id' => 9
            ],
            [
                'name' => 'Biosíntesis de creatina y trastornos del transporte',
                'slug' => 'biosintesis-creatina-trastornos-transporte',
                'parent_id' => 9
            ],
            [
                'name' => 'Xantomatosis cerebrotendinosa',
                'slug' => 'xantomatosis-cerebrotendinosa',
                'parent_id' => 9
            ],
            [
                'name' => 'Neurotransmisores y trastornos neurometabólicos',
                'slug' => 'neurotransmisores-trastornos-neurometabolicos',
                'parent_id' => 9
            ],
            [
                'name' => 'Trastornos peroxisomales',
                'slug' => 'trastornos-peroxisomales',
                'parent_id' => 9
            ],
            [
                'name' => 'Trastornos del metabolismo de las purinas',
                'slug' => 'trastornos-metabolismo-purinas',
                'parent_id' => 9
            ],
            [
                'name' => 'Metabolismo del piruvato y defectos del ciclo del ácido tricarboxílico',
                'slug' => 'metabolismo-piruvato-defectos-ciclo-acido-tricarboxilico',
                'parent_id' => 9
            ],
            [
                'name' => 'Trastornos tratables',
                'slug' => 'trastornos-tratables',
                'parent_id' => 9
            ],
            [
                'name' => 'Porfirias',
                'slug' => 'porfirias',
                'parent_id' => 9
            ],
            [
                'name' => 'Paneles metabólicos basados en síntomas',
                'slug' => 'paneles-matebolicos-basados-sintomas',
                'parent_id' => 9
            ],
            [
                'name' => 'Trastornos mitocondriales',
                'slug' => 'trastornos-mitocondriales',
                'parent_id' => 9
            ],
            [
                'name' => 'Hiperoxalurias primarias',
                'slug' => 'hiperoxalurias-primarias',
                'parent_id' => 9
            ],
            [
                'name' => 'Trastornos esqueléticos',
                'slug' => 'trastornos-esqueleticos',
                'parent_id' => 9
            ],
            [
                'name' => 'Síndrome urémico hemolítico atípico y microangiopatías trombóticas',
                'slug' => 'sindrome-uremico-hemolitico-atipico-microangiopatias-tromboticas',
                'parent_id' => 11
            ],
            [
                'name' => 'Ciliopatías',
                'slug' => 'ciliopatias',
                'parent_id' => 11
            ],
            [
                'name' => 'Trastornos renales',
                'slug' => 'trastornos-renales',
                'parent_id' => 11
            ],
            [
                'name' => 'Nefrolitiasis',
                'slug' => 'nefrolitiasis',
                'parent_id' => 11
            ],
            [
                'name' => 'Enfermedad renal progresiva',
                'slug' => 'enfermedad-renal-progresiva',
                'parent_id' => 11
            ],
            [
                'name' => 'Neuropatías y trastornos relacionados',
                'slug' => 'neuropatias-trastornos-relacionados',
                'parent_id' => 12
            ],
            [
                'name' => 'Trastornos del movimiento',
                'slug' => 'trastornos-movimiento',
                'parent_id' => 12
            ],
            [
                'name' => 'Trastornos neurodegenerativos',
                'slug' => 'trastornos-neurodegenerativos',
                'parent_id' => 12
            ],
            [
                'name' => 'Trastornos neurovasculares',
                'slug' => 'trastornos-neurovasculares',
                'parent_id' => 12
            ],
            [
                'name' => 'Convulsiones de epilepsia y anomalías cerebrales del desarrollo',
                'slug' => 'convulsiones-epilepsia-anomalias-cerebrales-desarrollo',
                'parent_id' => 12
            ],
            [
                'name' => 'Trastornos del neurodesarrollo',
                'slug' => 'trastornos-neurodesarrollo',
                'parent_id' => 12
            ],
            [
                'name' => 'Trastornos neuromusculares',
                'slug' => 'trastornos-neuromusculares',
                'parent_id' => 12
            ],
            [
                'name' => 'Trastornos oculares',
                'slug' => 'trastornos-oculares',
                'parent_id' => 13
            ],
            [
                'name' => 'Pancreatitis crónica',
                'slug' => 'pancreatitis-cronica',
                'parent_id' => 14
            ],
            [
                'name' => 'Oncología pedriátrica',
                'slug' => 'oncologia-pedriatrica',
                'parent_id' => 14
            ],
            [
                'name' => 'Síndromes de crecimiento excesivo',
                'slug' => 'sindromes-crecimiento-excesivo',
                'parent_id' => 14
            ],
            [
                'name' => 'Convulsiones de epilepsia y anomalías cerebrales del desarrollo',
                'slug' => 'convulsiones-epilepsia-anomalias-cerebrales-desarrollo',
                'parent_id' => 14
            ],
            [
                'name' => 'Ciliopatías',
                'slug' => 'ciliopatias',
                'parent_id' => 14
            ],
            [
                'name' => 'RASopatías (trastornos del espectro de Noonan)',
                'slug' => 'rasopatias-trastornos-espectro-noonan',
                'parent_id' => 14
            ],
            [
                'name' => 'Fibrosis quística',
                'slug' => 'fibrosis-quistica',
                'parent_id' => 14
            ],
            [
                'name' => 'Trastornos del desarrollo',
                'slug' => 'trastornos-desarrollo',
                'parent_id' => 14
            ],
            [
                'name' => 'Trastornos de la piel',
                'slug' => 'trastornos-piel',
                'parent_id' => 14
            ],
            [
                'name' => 'Trastornos oculares',
                'slug' => 'trastornos-oculares',
                'parent_id' => 14
            ],
            [
                'name' => 'Defectos cardíacos congénitos',
                'slug' => 'defectos-cardiacos-congenitos',
                'parent_id' => 14
            ],
            [
                'name' => 'Convulsiones de epilepsia y anomalías cerebrales del desarrollo',
                'slug' => 'convulsiones-epilepsia-anomalias-cerebrales-desarrollo',
                'parent_id' => 14
            ],
            [
                'name' => 'Trastornos esqueléticos',
                'slug' => 'trastornos-esqueleticos',
                'parent_id' => 14
            ],
            [
                'name' => 'Trastornos del neurodesarrollo',
                'slug' => 'trastornos-neurodesarrollo',
                'parent_id' => 14
            ],
            [
                'name' => 'Trastornos pulmonares',
                'slug' => 'trastornos-pulmonares',
                'parent_id' => 14
            ],
            [
                'name' => 'Sordera',
                'slug' => 'sordera',
                'parent_id' => 14
            ],
            [
                'name' => 'Trastornos renales',
                'slug' => 'trastornos-renales',
                'parent_id' => 14
            ],
            [
                'name' => 'Trastornos del tejido conectivo',
                'slug' => 'trastornos-tejido-conectivo',
                'parent_id' => 14
            ],
            [
                'name' => 'Detección de portadores',
                'slug' => 'deteccion-portadores',
                'parent_id' => 16
            ],
            [
                'name' => 'Pantallas de portadora amplia',
                'slug' => 'pantallas-portadora-amplia',
                'parent_id' => 16
            ],
            [
                'name' => 'Pantallas de operador completas',
                'slug' => 'pantallas-operador-completas',
                'parent_id' => 16
            ],
            [
                'name' => 'Pantallas de soporte principal',
                'slug' => 'pantallas-soporte-principal',
                'parent_id' => 16
            ],
            [
                'name' => 'Citogenétrica de la infertilidad',
                'slug' => 'citogenetica-infertilidad',
                'parent_id' => 17
            ],
            [
                'name' => 'NIPS para embarazos únicos o gemelares',
                'slug' => 'nips-embarazos-unicos-gemelares',
                'parent_id' => 18
            ],
            [
                'name' => 'Paneles proactivos',
                'slug' => 'paneles proactivos',
                'parent_id' => 19
            ],
            [
                'name' => 'Paneles proactivos adicionales',
                'slug' => 'paneles-proactivos-adicionales',
                'parent_id' => 19
            ],
            [
                'name' => 'Farmacogenómica',
                'slug' => 'farmacogenomica',
                'parent_id' => 19
            ]
        ];

        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
