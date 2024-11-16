<?php

namespace BenBjurstrom\PgvectorScout\Database\Factories;

use BenBjurstrom\PgvectorScout\HandlerConfig;
use BenBjurstrom\PgvectorScout\Models\Embedding;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Pgvector\Laravel\Vector;

/** @extends Factory<Embedding> */
class EmbeddingFactory extends Factory
{
    protected $model = Embedding::class;

    public function definition(): array
    {
        $config = HandlerConfig::fromConfig();

        return [
            'embeddable_type' => $this->faker->word,
            'embeddable_id' => $this->faker->randomNumber(),
            'content_hash' => $this->faker->md5,
            'vector' => new Vector(array_fill(0, $config->dimensions, $this->faker->randomFloat(8, 0, 1))),
            'embedding_model' => 'test-model',
        ];
    }

    public function forModel(Model $model): self
    {
        return $this->state(function (array $attributes) use ($model) {
            return [
                'embeddable_type' => get_class($model),
                'embeddable_id' => $model->getKey(),
            ];
        });
    }

    public function embedding1(): self
    {
        return $this->state(function (array $attributes) {
            return [
                'vector' => new Vector([0.024012709, 0.0050153127, -0.011790076, -0.0148705775, -0.00058891927, -0.012111571, -0.02388411, 0.06233484, 0.032617066, -0.007423598, 0.06958308, -0.03946782, -0.035025354, -0.0034078406, 0.0074002165, 0.050644133, -0.038859904, 0.018962324, -0.048867147, 0.004828261, 0.044798784, -0.0025398056, -0.038509183, 0.034066714, -0.015782451, -0.011889447, -0.026631426, 0.023112524, 0.04311532, -0.030372452, -0.02953072, -0.024293285, 0.00547125, -0.011351675, -0.03528255, 0.009247348, 0.025883222, -0.04080056, 0.048305996, -0.034113478, -0.028548703, 0.030816698, 0.028291507, 0.03380952, 0.051626153, -0.0035919691, 0.039537966, 0.0019728064, -0.02336972, 0.0058365846, 0.0024959655, 0.029460577, 0.039397676, 0.036404856, 0.044471443, -0.03717644, 0.02948396, -0.0054011056, -0.013607981, 0.021545969, -0.006652011, -0.01923121, 0.042039774, 0.02040028, -0.024246523, -0.05419811, -0.06369096, -0.06186721, 0.029694391, -0.011059407, 0.034043334, 0.010831438, -0.003586124, 0.032523543, -0.023018999, -0.0029855138, -0.015127772, 0.0077334014, 0.05157939, 0.027964167, -0.05041032, 0.050503846, -0.040052354, -0.0132572595, -0.038696233, -0.040707037, 0.02585984, -0.0109425, 0.032523543, 0.008095813, 0.040052354, -0.0022489994, -0.041525386, -0.010843129, 0.046973255, -0.0058132033, -0.014882267, 0.041057758, -0.011228923, -0.0022796874, -0.0080315145, 0.021148486, -0.011906983, 0.035703413, 0.037012774, -0.02618718, 0.052795224, 0.00045703351, 0.011550417, -0.020353518, -0.010334583, 0.012497364, -0.025509119, 0.010621006, -0.051672917, -0.051018238, 0.0034019952, -0.02518178, -0.053449903, 0.00861605, -0.014028846, 0.05036356, -0.017617892, -0.04891391, -0.013198806, -0.020201538, 0.040683653, 0.020587333, 0.004056675, -0.05419811, 0.0033669232, -0.02604689, 0.013514455, -0.03163505, -0.07393202, -0.018518077, -0.05139234, -0.0077567827, -0.017746491, 0.056489486, 0.021581043, -0.0563492, 0.017009975, -0.0038754689, 0.040052354, -0.04758117, -0.032242965, -0.026163798, 0.01640206, 0.06261542, -0.025111634, 0.062288076, -0.07636369, 0.030255545, 0.057097405, 0.017384078, 0.013947011, -0.009288265, -0.026584664, 0.018202428, -0.029390434, -0.005029926, -0.016869688, -0.01184853, -0.024947966, 0.0077334014, -0.020119704, -0.011901138, -0.030372452, -0.018868798, 0.039537966, -0.0038667007, 0.0018164433, -0.030816698, -0.005649533, -0.052654937, 0.008002288, -0.021978525, 0.018331027, -0.015805833, -0.019090923, 0.029647628, 0.04358295, -0.00020659668, -0.03897681, 0.015010865, -0.015899358, 0.042086538, -0.002004956, 0.0064708055, -0.032102678, -0.07117301, 0.005956414, -0.02784726, 0.023135906, -0.033248365, 0.0038053244, 0.009305801, 0.013619672, 0.006768918, -0.0055063223, -0.0018865876, -0.0071547115, -0.015139463, -0.0011617638, 0.009317492, -0.0401225, 0.05373048, -0.017372388, -0.06696436, -0.003422454, 0.0015504798, -0.043349136, 0.028057693, 0.028010929, 0.009054451, -0.003790711, 0.037737597, 0.027239343, 0.030091876, 0.045476843, -0.020938054, 0.058593813, -0.002497427, -0.046505626, 0.013292332, 0.031728573, -0.060931955, 0.016834615, -0.039350912, 0.0016177014, -0.01558371, -0.00787369, 0.0053397296, -0.017489295, 0.015384968, 0.064298876, 0.043068558, 0.043185465, 0.010001399, -0.035867084, 0.008446534, -0.016378678, 0.06032404, 0.026257323, 0.011135397, -0.02637423, -0.090953685, -0.024082853, 0.008569287, 0.011719932, 0.042507403, 0.042647693, -0.0652809, 0.04872686, -0.0060908576, -0.049849167, -0.010919118, -0.02187331, -0.00418235, -0.046178285, 0.016951522, 0.046154905, 0.01840117, -0.04737074, 0.039070338, 0.032359872, 0.039327532, -0.01640206, 0.023580153, -0.011223077, -0.009750048, -0.013385857, 0.00447754, 0.017278863, -0.009346719, -0.01623839, 0.034066714, 0.015572019, 0.05489955, -0.08122702, 0.011410128, -0.020762693, -0.08824144, 0.03285088, -0.011778385, 0.007879536, -0.022913782, 0.025672788, -0.004930555, 0.007978906, 0.017536057, 0.015969504, -0.038579326, 0.035680033, 0.011626407, 0.004223267, 0.028805899, 0.04692649, -0.03878976, 0.053403143, 0.02338141, -0.009557151, 0.029554103, -0.027379632, 0.024129616, 0.060183752, -0.014823814, -0.034534343, 0.05153263, 0.027215961, 0.03084008, 0.015116082, -0.033435415, 0.021744711, -0.024106234, -0.011860221, -0.017746491, -0.0148705775, -0.026654808, 0.034557726, 0.0031301863, 0.017337317, 0.0182375, -0.020154776, -0.028922806, -0.009790965, -0.0073885256, -0.0074820514, -0.015805833, -0.021101722, 0.034043334, -0.026397612, 0.03914048, -0.051766444, -0.010404727, -0.010416418, -0.0132572595, 0.0050328486, -0.0021423218, -0.021277083, -0.04975564, -0.048305996, 0.03582032, -0.021148486, 0.01822581, 0.033739377, 0.016542347, -0.01759451, 0.025018109, 0.016296843, 0.027823878, 0.0070085777, -0.03002173, 0.0011055024, -0.007996443, -0.040566746, -0.009440244, -0.015384968, 0.012988374, 0.0022621516, 0.018143974, 0.009387637, 0.051298816, -0.0038111699, -0.005933033, -0.0019172756, -0.046154905, -0.0022913783, 0.020774383, 0.03977178, 0.029226763, -0.011871912, 0.019359808, -0.03518902, 0.047651313, 0.018822035, 0.03116742, -0.04910096, 0.036124278, 0.041642293, 0.037690833, -0.004170659, -0.027823878, 0.043021794, 0.017956924, -0.057471506, 0.044541586, -0.028992949, -0.011737468, -0.007213165, -0.076597504, -0.018529767, 0.004974395, -0.023241121, -0.004784421, -0.06630968, 0.010609315, -0.028104456, 0.017278863, 0.0665435, 0.013035136, -0.029086474, 0.027870642, 0.0182375, 0.011906983, -0.004649978, 0.025438974, -0.009451935, -0.02369706, 0.032219585, 0.00022321941, 0.010995109, -0.010071542, -0.015630472, 0.0041969633, 0.0068273717, 0.066216156, -0.017267171, 0.003919309, -0.025883222, -0.03034907, -0.008247793, 0.036100898, 0.0016790775, -0.01475367, 0.035025354, -0.041572146, -0.05391753, -0.03130771, -0.07136007, 0.0053601884, 0.032266345, -0.01475367, -0.02022492, -0.08941051, -0.05321609, -0.018179046, -0.030465977, -0.04115128, -0.032430016, -0.030793317, 0.00339615, -0.050503846, -0.05022327, 0.026888622, 0.0271692, -0.006961815, 0.0072365464, -0.04807218, 0.015268061, -0.00547125, 0.0006667355, -0.009264884, -0.010129996, 0.058547053, 0.019792363, -0.023451556, 0.002181778, -0.02667819, 0.034323912, 0.008236102, 0.014812124, -0.0022022366, 0.016776161, -0.0066169393, 0.026771715, 0.027099054, 0.029109856, -0.03427715, 0.038088318, -0.035726797, -0.017372388, -0.018272573, 0.014145753, -0.018167356, 0.005561853, 0.00422619, 0.0411279, 0.022352628, 0.007628185, 0.0022504607, -0.023521699, 0.030091876, -0.019546859, 0.030419216, 0.009218121, -0.023241121, -0.027286107, -0.0057810536, -0.013140352, -0.04655239, -0.0037439484, -0.010422263, 0.020856218, 0.009498698, -0.022282485, 0.03231311, 0.04573404, 0.0030366606, -0.0073534534, 0.043723237, 0.040730417, 0.0354696, 0.041104518, 0.011965437, 0.0065058772, 0.020634094, 0.007628185, -0.0038959275, 0.003404918, 0.04295165, -0.0031272636, 0.00579859, 0.003621196, -0.008119195, 0.02901633, -0.010866511, -0.03418362, 0.012801322, -0.04496245, -0.019324735, 0.044190865, -0.015151154, -0.036217805, -0.013526146, -0.005415719, -0.011404283, -0.009171358, -0.0066286298, 0.009054451, -0.043278992, -0.009031069, -0.016659254, -0.009598069, 0.010252749, -0.0010032087, 0.0048165703, -0.029764535, 0.0041648136, -0.0067513823, -0.023404792, -0.0048224158, -0.00036569987, 0.0012757482, -0.003457526, 0.0051380647, 0.0023147597, -0.0067338464, -0.016507275, -0.007540505, 0.004381092, 0.012789631, 0.027660208, 0.022621514, 0.020984815, -0.033599086, -0.018038759, -0.0130117545, 0.016261771, -0.013222188, -0.017617892, 0.015688926, -0.0035948919, -0.00057795923, 0.0018427474, 0.01871682, 0.008475761, -0.019313045, 0.03544622, 0.011632252, 0.008709575, 0.017676346, -0.02455048, 0.01972222, 0.0030863462, 0.010322893, -0.0005257164, 0.005281276, 0.013619672, -0.019862508, -0.043653093, -0.03051274, 0.020762693, -0.024947966, 0.0083997715, 0.011497809, -0.0066286298, 0.04620167, 0.04994269, -0.011088634, 0.036872484, -0.010977572, -0.008089968, -0.00021463404, 0.015501875, -0.047043398, -0.0010645848, -0.04143186, 0.011152932, 0.0010806596, 0.042367116, 0.029811298, -0.02403609, -0.030045113, 0.06350391, -0.04278798, 0.021662876, -0.004369401, -0.0013108203, -0.018027067, -0.039584726, -0.019313045, 0.0104398, -0.003910541, -0.013385857, -0.012403838, 0.0024360507, 0.028151218, -0.0023644452, -0.010428109, 0.010696995, 0.030582884, -0.022738421, 0.011567953, 0.026608044, 0.022118814, -0.019780673, -0.034557726, -0.057985898, -0.01973391, 0.008066586, -0.008160112, -0.009972172, 0.013175425, 0.052467886, 0.021849928, -0.02189669, -0.004723045, 0.012731178, 0.0003403091, 0.02852532, 0.012123262, -0.046295192, 0.01343262, -0.032570306, -0.015490185, 0.013678125, -0.01134583, 0.012029735, -0.0041326643, -0.012731178, -0.0045739883, 0.0063772798, -0.019453334, 0.038555946, -0.017267171, -0.016437132, 0.0011836839, 0.018798655, 0.0042934115, -0.012450601, 0.042717837, -0.024316667, 0.0061434656, 0.006166847, 0.0059213424, -0.007026114, -0.005325116, 0.023533389, 0.0060090227, -0.021452444, 0.009580533, -0.05653625, 0.0122635495, -0.014683526, 0.017652964, 0.009796811, -0.007774319, 0.029624248, -0.011363366, 0.028127836, -0.011439355, 0.027777115, 0.003790711, 0.001508101, 0.02686524, -0.0012910923, 0.015723998, 0.0052871215, 0.0027327023, 0.028081074, -0.0020254147, 0.007692484, -0.011041871, 0.0034546035, 0.03133109, -0.004097592, -0.028197981, -0.019313045, 0.03065303, -0.038205225, 0.014367877, -0.053449903, -0.022013597, -0.0046178284, -0.02403609, -0.0444013, -0.040847324, -0.0046178284, 0.006634475, 0.0125090545, -0.023299575, -0.007511278, -0.011123706, -0.01375996, -0.018155666, -0.009136287, -0.0038754689, -0.00031546637, 0.01741915, 0.043653093, -0.03264045, -0.01807383, 0.010901582, 0.02768359, 0.028244743, 0.007815236, -0.013713197, 0.011603025, -0.008475761, 0.01375996, -0.014192516, -0.0007986213, -0.031050513, -0.018938942, -0.005716755, -0.0043547875, 0.0011493425, -0.032359872, -0.05157939, -0.011491964, 0.0076398756, 0.031868864, -0.0137482695, -0.002718089, -0.03247678, -0.0017506831, -0.0047055087, -0.03995883, 0.02204867, 0.007265773, 0.007604804, -0.017477604, 0.027777115, -0.023743823, 0.026888622, -0.035118878, 0.020002797, 0.034113478, 0.025485737, 0.0062369914, -0.0050503844, -0.0167294, -0.038836524, 0.022364318, -0.013724888, 0.019804055, 0.0056933733, -0.015490185, -0.0082828645, -0.01821412, -0.0003103517, 0.02555588, -0.009112905, -0.004267107, -0.005716755, 0.03579694, -0.010457336, -0.004603215, 0.029904824, -0.015045938, -0.00911875, 0.0033786139, 0.007937989, -0.018740201, 0.044167485, -0.0033084697, -0.00671631, -0.008820637, -0.007552196, -0.0064065065, -0.03799479, 0.019137684, -0.023778895, 0.009638987, -0.0066403206, -0.061539873, -0.0016381601, 0.0028408414, -0.07636369, -0.015548638, 0.0043372517, 0.01807383, 0.004436623, -0.0109425, -0.012614271, 0.025392212, 0.001119385, -0.0055501624, 0.038298752, 0.03448758, -0.011953746, 0.016320225, -0.013982084, -0.038368896, -0.0043372517, -0.03116742, 0.0069033615, -0.010545016, 0.030138638, -0.008142577, 0.009411017, -0.026631426, 0.010732068, -0.012649343, -0.018751891, 0.036685433, -0.003992376, -0.035212405, -0.010889892, -0.015408349, -0.053824008, 0.010638542, -0.0007825466, 0.044307772, -0.023322957, 0.031401236, -0.0069676605, -0.04655239, 0.008358854, 0.016004575, -0.0454067, -0.0016703095, -0.028572084, 0.01724379, -0.0026245634, 0.018798655, -0.045079358, 0.013935321, 0.016039647, 0.002740009, -0.0044395453, -0.028712371, -0.006634475, -0.009399327, 0.019979415, -0.0332016, -0.014566619, -0.033224985, -0.023930874, 0.045266412, -0.04145524, 0.00032277306, 0.006231146, 0.007727556, -0.023790585, 0.0034896755, -0.0023352185, -0.017699728, -0.0010536248, -0.0015460958, -0.018646674, 0.021405682, -0.007341763, 0.00019928999, 0.0066578565, -0.0045389165, -0.019102613, 0.033692613, 0.0041326643, 0.02305407, -0.014800433, 0.018132284, 0.012894847, 0.002713705, 0.002973823, 0.013900248, -0.0041560456, -0.029647628, 0.04124481, -0.060651377, 0.003051274, -0.004918864, -0.027473157, -0.006266218, 0.012205096, 0.032149438, 0.01177254, 0.009919563, -0.05008298, 0.018342717, -0.03299117, -0.04222683, -0.038836524, 0.007955525, 0.008838173, -0.017161956, -0.0023644452, 0.017524367, -0.0026684036, -0.021592733, 0.0011866066, 0.017664656, -0.011386747, 0.012871467, -0.015992885, 0.05850029, 0.041922867, -0.015572019, 0.0082828645, 0.007078722, -0.03628795, -0.0049451683, -0.017173646, -0.01857653, 0.027075673, -0.034394056, 0.028501939, -0.037667453, 0.023241121, -0.0061259298, -0.047253832, 0.018833727, 0.0050006993, 0.012859776, 0.007224856, -0.010924964, 0.015805833, 0.03780774, 0.014391258, 0.0040508294, -0.014063918, 0.006318826, 0.0041940403, 0.027753735, 0.0035247477, 0.0069735055, -0.0045389165, 0.052841987, 0.033879664, -0.03878976, 0.020844527, -0.003016202, -0.04098761, 0.0054683276, -0.0122518595, 0.003548129, 0.03165843, -0.0024667387, -0.029086474, 0.05503984, -0.032359872, -0.014683526, 0.022153886, 0.023615224, 0.044681877, -0.013678125, -0.04496245, 0.05171968, -0.012836394, -0.013420929, -0.00010804769, -0.00935841, 0.019687148, 0.0017419151, -0.02270335, 0.0527017, 0.02686524, -0.026608044, 0.01153288, 0.020821147, 0.0037965565, 0.048025418, -0.021931764, 0.035750177, 0.00073030376, 0.019523477, 0.0069325883, 0.0033903045, 0.039210625, -0.038859904, -0.024527099, -0.0064591146, 0.02269166, 0.032219585, 0.021171868, 0.01840117, 0.0053514205, 0.0417592, 0.0028554548, 0.01159718, 0.009071987, -0.007026114, -0.01657742, -0.0056875283, 0.019768983, 0.027403014, -0.05784561, -0.025883222, 0.021312155, -0.00068609824, 0.010469027, 0.05948231, 0.017009975, -0.013491074, -0.0009703285, 0.031424616, -0.040216025, 0.032780737, 0.0077567827, -0.0152446795, 0.037527163, 0.007803546, 0.010071542, 0.008177648, 0.020867908, 0.02469077, 0.04690311, -0.016074719, 0.03084008, 0.017664656, 0.0037790204, -0.008353009, -0.005453714, 0.034394056, -0.0027984625, 0.0019903425, -0.01608641, -0.004749349, -0.015232989, -0.029226763, -0.025579263, 0.0031126502, -0.025883222, -0.03250016, -0.0062369914, -0.060417566, 0.018541459, -0.008253638, -0.006558486, 0.0074411337, 0.016951522, 0.018529767, 0.06644997, 5.788269e-06, -0.001013438, -0.0016060106, 0.0135027645, 0.009656522, -0.021312155, 0.009101214, 0.011287376, 0.0060674762, 0.026327468, -0.015992885, 0.026818478, 0.010030625, -0.00075843453, 0.02997497, 0.00854006, 0.010843129, 0.0012450601, -0.011123706, -0.0132572595, 0.019698838, -0.010977572, -0.010930809, 0.001607472, -0.017103503, 0.018249191, -0.01276625, -0.032967787, -0.011994664, 0.010732068, 0.003431222, -0.04872686, -0.015104392, -0.0045272256, 0.017547749, -0.02768359, 0.009171358, 0.015653854, -0.008914162, 0.02286702, -0.020493805, 0.021277083, 0.027332868, 0.022247411, 0.014367877, 0.02487782, -0.004614906, -0.008727112, -0.02388411, -0.025789695, -0.0024871975, 0.020938054, 0.03579694, -0.014473093, -0.0037527164, 0.03500197, -0.026093654, -0.0069676605, -0.011041871, 2.4819916e-05, 0.030723173, -0.0034195313, 0.03301455, 0.000816888, -0.027496539, -0.052047018, -0.01821412, -0.008832328, -0.024714151, 0.016682636, 0.047347356, -0.03034907, 0.030910224, -0.0074703605, -0.01822581, -0.023264503, 0.01640206, 0.014671835, -0.012836394, -0.009796811, 0.016051339, -0.027894022, 0.018529767, -0.021183558, 0.0024959655, 0.012064808, 0.010083233, -0.012555817, -0.010317047, 0.0006871943, -0.046809584, 0.00035199983, 0.07206151, 0.01292992, 0.025626026, 0.010094924, -0.0027765424, -0.022504607, 0.012392147, -0.023533389, 0.0007759706, -0.0146250725, -0.041922867, -0.004866256, -0.0049597817, 0.0096448315, 0.0031301863, -0.025438974, 0.015361587, 0.021323847, 0.016016265, -0.038555946, -0.00410636, -0.0068156812, 0.025485737, -0.0005764979, -0.0028408414, -0.021475825, 0.0059651826, -0.035072114, 0.0034809075, 0.040753797, 0.025602644, -0.008329627, -0.0153732775, 0.02386073, -0.010077388, -0.03960811, -0.02221234, 0.010702841, -0.0027633905, -0.032874264, 0.019090923, -0.036521763, -0.00036222918, 0.015677236, 0.06939603, 0.0046178284, -0.008879091, 0.049989454, -0.0033435416, -0.027636828, -0.00069742365, 0.001110617, -0.0005037963, -0.024924584, 0.03925739, -0.007973061, -0.004939323, -0.045055978, -0.011339984, -0.003279243, -0.013035136, -0.013350786, -0.020201538, -0.014893958, 0.015092701, 0.0058453525, 0.010726222, 0.017337317, -0.020365208, 0.009808501, 0.026818478, -0.002596798, -0.010708686, 0.0040157572, 9.0876965e-06, 0.020739311, -0.02405947, 0.015326515, 0.0095279245, -0.05667654, -0.040660273, -0.015034247, -0.0060440945, -0.018132284, 0.0152446795, 0.029413814, -0.020259991, 0.020154776, -0.01772311, -0.00047858825, 0.0031886399, 0.0063948156, 0.060090225, 0.01053917, -0.008119195, 0.009299956, -0.009925408, -0.004594447, -0.038859904, -0.028759135, -0.006283754, -0.022796875, 0.015034247, 0.027262725, -0.018693438, -0.011877757, -0.027823878, -0.019488405, 0.019663766, -0.03712968, -0.0018047526, 0.008095813, 0.009539615, 0.009200585, -0.008592668, 0.01457831, -0.03168181, -0.0006608902, -0.039701633, -0.019687148, -0.028969567, 0.030138638, 0.0063071353, 0.02269166, 0.008563441, -0.0016615415, -0.00073797576, 0.044705257, 0.020949744, -0.036755577, -0.032102678, 0.0046002925, 0.015209608, -0.0046119834, 0.005997332, 0.011795921, -0.042390496, -0.034113478, -0.008160112, -0.012158333, -0.035072114, -0.017185336, 0.00010275034, 0.009112905, 0.007078722, -0.034955207, -0.007967216, 0.002225618, -0.018272573, 0.038532563, 0.027379632, 0.018646674, 0.0015592478, -0.037573926, 0.008627741, -0.021405682, -0.009545461, -0.029460577, -0.024831058, -0.017536057, 0.021300465, 0.023229431, -0.01052748, 0.013701507, 0.0031652583, 0.0028759134, -0.01177254, -0.0079029165, 0.009253194, 0.0142509695, 0.014098991, -0.014812124, 0.03916386, 0.035703413, -0.040356316, -0.011866066, -0.005553085, 0.03598399, -0.0056641465, 0.002329373, -0.007055341, 0.036755577, -0.031260945, -0.015338205, 0.021581043, 0.012684415, 0.0010711609, -0.029226763, -0.03797141, -0.011889447, 0.011667324, -0.021627804, 0.030886844, 0.013514455, 0.0009637525, 0.03726997, -0.0037059535, -0.008920008, -0.005950569, -0.0076691024, -0.06341039, -0.0071897837, 0.0015943199, 0.0062253005, 0.007341763, -0.0003605852, 0.0008095813, 0.012450601, 0.015653854, -0.0061726924, 0.026163798, -0.005570621, -0.009212276, -0.040005594, 0.02355677, -0.008195184, -0.040099118, -0.019967724, -0.0135027645, -0.00069011695, 0.007031959, 0.0052754306, 0.0042378805, 0.0052871215, 0.0015446345, 0.035913847, 0.017512677, 0.0135027645, 0.029600866, -0.029881442, 0.0067396914, 0.024597244, 0.011795921, -0.036755577, -0.0054244874, 0.007522969, -0.034347292, 0.006295445, -0.04776822, -0.0095220795, -0.048259232, -0.022995617, -0.0064883414, 0.009814347, -0.020926362, -0.009218121, -0.015279751, 0.015326515, -0.02852532, -0.01709181, -0.027403014, -0.0004683589, -0.0038433194, -0.02336972, -0.026701571, -0.02604689, -0.026023509, -0.007932143, -0.027823878, -0.035025354, -0.02852532, -0.03544622, -0.004243726, 0.0177348, 0.008855709, 0.006809836, -0.034557726, -0.0047171996, 0.0057635177, 0.0012414068, -0.04061351, 0.007698329, -0.0017682192, -0.023287885, -0.039514583, 0.026117036, 0.004585679, -0.017384078, 0.009545461, 0.01807383, -0.038205225, 0.0033113922, -0.0057489043, -0.00029117163, 0.02105496, 0.00505623, 5.283651e-05, -0.018868798, -0.0045886016, 0.013900248, -0.0067864545, -0.023521699, -0.009890337, 0.0080315145, 0.022118814, 0.019465024, 0.040379696, 0.016121482, -0.010054006, 0.010433954, -0.0032646295, -0.027777115, -0.0043051024, 0.0080315145, 0.029624248, 0.04225021, 0.037854504, -0.012918229, -0.011275685, 0.015548638, 0.011994664, -0.019301355, -0.0015007943, -0.005345575, -0.027706971, -0.0015753225, -0.0022270794, 0.02107834, -0.0007083837, -0.015875978, -0.030232163, -0.016706018, 0.016296843, -0.039514583, 0.027870642, 0.009218121, -0.038041554, -0.023486627, -0.003267552, -0.010802211, -0.00016275654, -0.012953301, 0.00427003, 0.03380952, 0.010252749, -0.005617384, -0.020201538, 0.011638097, -0.0020064174, 0.0025661099, 0.012894847, 0.0050123897, 0.03427715, -0.01807383, -0.018506387, 0.0411279, 0.02455048, 0.0070378045, -0.001940657, 0.037223205, -0.012719487, -0.009855265, -0.0034662941, -0.013187115, 0.033061314, -0.026467757, 0.019839127, -0.0016498507, 0.025322067, 0.023825657, -0.008656967, -0.0027107822, -0.013830104, -0.011649787, -0.019044159, 0.0073651443, -0.022481225, -0.007067031, 0.015361587, 0.015805833, -0.030793317, 0.050129745, -0.0017711419, 0.010381347, -0.0073651443, -0.0055910796, 0.0140054645, -0.0030132793, 0.0010346274, 0.007446979, 0.004603215, 0.0030746555, 0.0055063223, -0.032430016, 0.044377916, -0.012310313, 0.047183685, 0.007926298, -0.031214183]),
            ];
        });
    }
}
