<?php

namespace Database\Seeders;

use App\Models\Organization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Organization::insert([
            'name' => 'مستشفى 57357',
            'description' => 'أحد أكبر مستشفيات الاطفال في العالم يقع في القاهرة في مصر ويختص في علاج سرطانات الأطفال ويتميز هذا المستشقي بكونه بني عن طريق التبرعات مع حملة دعائية كبيرة صاحبت بنائه',
            'type' => 'التبرع النقدي',
            'category' => 'الصحة',
            'contact_phone' => '19057',
            'isVerified' => true,
            'image' => 'https://d1b3667xvzs6rz.cloudfront.net/2018/09/2-jpg.jpg',
            "volunteer_donation"=>"تبرع"
        ]);
        Organization::insert([
            'name' => 'مؤسسة مصر الخير',
            'description' => 'مؤسسة مصر الخير هي مؤسسة تنموية غير هادفة للربح تعمل في ستة مجالات لتنمية الانسان; الصحة، التعليم، البحث العلمي، التكافل الاجتماعي، مناحي الحياة ومجال التنمية المتكاملة على أمل القضاء على البطالة، والامية، والفقر، والمرض',
            'type' => 'التبرع بالوقت والمجهود',
            'category' => 'تنمية حياة الانسان - التكافل الاجتماعي - الصحة - الغارمين - التنمية المتكاملة - البحث العلمي والابتكار - التعليم',
            'contact_phone' => '16140',
            'isVerified' => true,
            'image' => 'https://d2tm09s6lgn3z4.cloudfront.net/2021/03/1615458772_786_107958_logoforprs2.jpg',
            "volunteer_donation"=>"تبرع"

        ]);
        Organization::insert([
            'name' => 'بنك الطعام المصري',
            'description' => 'بنك الطعام المصري هو منظمة مصرية غير حكومية تأسست ف 2006 تعمل علي توفير الطعام للمحتاجين',
            'type' => 'التبرع بالطعام',
            'category' => 'الطعام',
            'contact_phone' => '16060',
            'isVerified' => true,
            'image' => 'https://www.csregypt.com/wp-content/uploads/2018/07/بنك-الطعام.png',
            "volunteer_donation"=>"تبرع"

        ]);
        Organization::insert([
            'name' => 'جمعية رسالة',
            'description' => 'جمعية خيرية تأسست عام 1999 تخدم ٤ مليون محتاج و فقير',
            'type' => 'التبرع بالموارد - التبرع بالوقت والجهد',
            'category' => 'رعاية الايتام - خدمة المسنين - ايواء اطفال الشوارع - خدمة المكفوفين و الصم و ذوي الاحتياجات الخاصة - دروس التقوية المجانية - محو الامية - معارض الملابس المستعملة - التبرع بالدم',
            'contact_phone' => '19450',
            'isVerified' => true,
            'image' => 'https://www.mogazmasr.com/wp-content/uploads/2020/11/رقم-جمعية-رسالة-والأنشطة-التي-تقوم-بها-جمعية-رسالة.png',
            "volunteer_donation"=>"تبرع"

        ]);
        Organization::insert([
            'name' => 'المركز الاقليمي بسوهاج',
            'description' => 'أن يكون المتبرع بصحة جيدة ولا يعاني أي أمراض معدية - أن يكون عمر المتبرع من 18-65 سنة - يجب أن لا يقل وزن المتبرع عن 50 كجم -  أن يكون النبض بين 50-100 في الدقيقة -  أن لا تزيد درجة الحرارة عن 37 درجة مئوية -  أن يكون معدل ضغط الدم أقل من120/80 ملم زئبق -  أن تكون نسبة الهيموجلوبين للرجال من 14- 17 جم، وللنساء من 12-14 جم.',
            'type' => 'التبرع بالدم',
            'category' => 'الصحة',
            'contact_phone' => '0932110117',
            'isVerified' => true,
            'image' => 'https://th.bing.com/th/id/OIP.hZzQagA-UM5CDvxEXd2enAHaEb?rs=1&pid=ImgDetMain',
            "volunteer_donation"=>"تبرع"
        ]);
        Organization::insert([
            'name' => 'المركز الاقليمي بأسيوط',
            'description' => 'أن يكون المتبرع بصحة جيدة ولا يعاني أي أمراض معدية - أن يكون عمر المتبرع من 18-65 سنة - يجب أن لا يقل وزن المتبرع عن 50 كجم -  أن يكون النبض بين 50-100 في الدقيقة -  أن لا تزيد درجة الحرارة عن 37 درجة مئوية -  أن يكون معدل ضغط الدم أقل من120/80 ملم زئبق -  أن تكون نسبة الهيموجلوبين للرجال من 14- 17 جم، وللنساء من 12-14 جم.',
            'type' => 'التبرع بالدم',
            'category' => 'الصحة',
            'contact_phone' => '882370016',
            'isVerified' => true,
            'image' => 'https://th.bing.com/th/id/OIP.hZzQagA-UM5CDvxEXd2enAHaEb?rs=1&pid=ImgDetMain',
            "volunteer_donation"=>"تبرع"
        ]);
        Organization::insert([
            'name' => 'المركز الاقليمي بقنا',
            'description' => 'أن يكون المتبرع بصحة جيدة ولا يعاني أي أمراض معدية - أن يكون عمر المتبرع من 18-65 سنة - يجب أن لا يقل وزن المتبرع عن 50 كجم -  أن يكون النبض بين 50-100 في الدقيقة -  أن لا تزيد درجة الحرارة عن 37 درجة مئوية -  أن يكون معدل ضغط الدم أقل من120/80 ملم زئبق -  أن تكون نسبة الهيموجلوبين للرجال من 14- 17 جم، وللنساء من 12-14 جم.',
            'type' => 'التبرع بالدم',
            'category' => 'الصحة',
            'contact_phone' => '0963344842',
            'isVerified' => true,
            'image' => 'https://th.bing.com/th/id/OIP.hZzQagA-UM5CDvxEXd2enAHaEb?rs=1&pid=ImgDetMain',
            "volunteer_donation"=>"تبرع"

        ]);
        Organization::insert([
            'name' => 'المركز الاقليمي بالاقصر',
            'description' => 'أن يكون المتبرع بصحة جيدة ولا يعاني أي أمراض معدية - أن يكون عمر المتبرع من 18-65 سنة - يجب أن لا يقل وزن المتبرع عن 50 كجم -  أن يكون النبض بين 50-100 في الدقيقة -  أن لا تزيد درجة الحرارة عن 37 درجة مئوية -  أن يكون معدل ضغط الدم أقل من120/80 ملم زئبق -  أن تكون نسبة الهيموجلوبين للرجال من 14- 17 جم، وللنساء من 12-14 جم.',
            'type' => 'التبرع بالدم',
            'category' => 'الصحة',
            'contact_phone' => '0952283579',
            'isVerified' => true,
            'image' => 'https://th.bing.com/th/id/OIP.hZzQagA-UM5CDvxEXd2enAHaEb?rs=1&pid=ImgDetMain',
            "volunteer_donation"=>"تبرع"

        ]);
        Organization::insert([
            'name' => 'المركز الاقليمي بأسوان',
            'description' => 'أن يكون المتبرع بصحة جيدة ولا يعاني أي أمراض معدية - أن يكون عمر المتبرع من 18-65 سنة - يجب أن لا يقل وزن المتبرع عن 50 كجم -  أن يكون النبض بين 50-100 في الدقيقة -  أن لا تزيد درجة الحرارة عن 37 درجة مئوية -  أن يكون معدل ضغط الدم أقل من120/80 ملم زئبق -  أن تكون نسبة الهيموجلوبين للرجال من 14- 17 جم، وللنساء من 12-14 جم.',
            'type' => 'التبرع بالدم',
            'category' => 'الصحة',
            'contact_phone' => '0972418629',
            'isVerified' => true,
            'image' => 'https://th.bing.com/th/id/OIP.hZzQagA-UM5CDvxEXd2enAHaEb?rs=1&pid=ImgDetMain',
            "volunteer_donation"=>"تبرع"

        ]);
        Organization::insert([
            'name' => 'المركز الاقليمي بالمنيا',
            'description' => 'أن يكون المتبرع بصحة جيدة ولا يعاني أي أمراض معدية - أن يكون عمر المتبرع من 18-65 سنة - يجب أن لا يقل وزن المتبرع عن 50 كجم -  أن يكون النبض بين 50-100 في الدقيقة -  أن لا تزيد درجة الحرارة عن 37 درجة مئوية -  أن يكون معدل ضغط الدم أقل من120/80 ملم زئبق -  أن تكون نسبة الهيموجلوبين للرجال من 14- 17 جم، وللنساء من 12-14 جم.',
            'type' => 'التبرع بالدم',
            'category' => 'الصحة',
            'contact_phone' => '0862339241',
            'isVerified' => true,
            'image' => 'https://th.bing.com/th/id/OIP.hZzQagA-UM5CDvxEXd2enAHaEb?rs=1&pid=ImgDetMain',
            "volunteer_donation"=>"تبرع"

        ]);
        Organization::insert([
            'name' => 'المركز الاقليمي بالوادي الجديد',
            'description' => 'أن يكون المتبرع بصحة جيدة ولا يعاني أي أمراض معدية - أن يكون عمر المتبرع من 18-65 سنة - يجب أن لا يقل وزن المتبرع عن 50 كجم -  أن يكون النبض بين 50-100 في الدقيقة -  أن لا تزيد درجة الحرارة عن 37 درجة مئوية -  أن يكون معدل ضغط الدم أقل من120/80 ملم زئبق -  أن تكون نسبة الهيموجلوبين للرجال من 14- 17 جم، وللنساء من 12-14 جم.',
            'type' => 'التبرع بالدم',
            'category' => 'الصحة',
            'contact_phone' => '0922932074',
            'isVerified' => true,
            'image' => 'https://th.bing.com/th/id/OIP.hZzQagA-UM5CDvxEXd2enAHaEb?rs=1&pid=ImgDetMain',
            "volunteer_donation"=>"تبرع"

        ]);
        Organization::insert([
            'name' => 'المركز الاقليمي بالاسكندرية',
            'description' => 'أن يكون المتبرع بصحة جيدة ولا يعاني أي أمراض معدية - أن يكون عمر المتبرع من 18-65 سنة - يجب أن لا يقل وزن المتبرع عن 50 كجم -  أن يكون النبض بين 50-100 في الدقيقة -  أن لا تزيد درجة الحرارة عن 37 درجة مئوية -  أن يكون معدل ضغط الدم أقل من120/80 ملم زئبق -  أن تكون نسبة الهيموجلوبين للرجال من 14- 17 جم، وللنساء من 12-14 جم.',
            'type' => 'التبرع بالدم',
            'category' => 'الصحة',
            'contact_phone' => '034951971',
            'isVerified' => true,
            'image' => 'https://th.bing.com/th/id/OIP.hZzQagA-UM5CDvxEXd2enAHaEb?rs=1&pid=ImgDetMain',
            "volunteer_donation"=>"تبرع"

        ]);
        Organization::insert([
            'name' => 'المركز الاقليمي بالعباسية',
            'description' => 'أن يكون المتبرع بصحة جيدة ولا يعاني أي أمراض معدية - أن يكون عمر المتبرع من 18-65 سنة - يجب أن لا يقل وزن المتبرع عن 50 كجم -  أن يكون النبض بين 50-100 في الدقيقة -  أن لا تزيد درجة الحرارة عن 37 درجة مئوية -  أن يكون معدل ضغط الدم أقل من120/80 ملم زئبق -  أن تكون نسبة الهيموجلوبين للرجال من 14- 17 جم، وللنساء من 12-14 جم.',
            'type' => 'التبرع بالدم',
            'category' => 'الصحة',
            'contact_phone' => '0226858645',
            'isVerified' => true,
            'image' => 'https://th.bing.com/th/id/OIP.hZzQagA-UM5CDvxEXd2enAHaEb?rs=1&pid=ImgDetMain',
            "volunteer_donation"=>"تبرع"

        ]);
        Organization::insert([
            'name' => 'المركز الاقليمي بدار السلام',
            'description' => 'أن يكون المتبرع بصحة جيدة ولا يعاني أي أمراض معدية - أن يكون عمر المتبرع من 18-65 سنة - يجب أن لا يقل وزن المتبرع عن 50 كجم -  أن يكون النبض بين 50-100 في الدقيقة -  أن لا تزيد درجة الحرارة عن 37 درجة مئوية -  أن يكون معدل ضغط الدم أقل من120/80 ملم زئبق -  أن تكون نسبة الهيموجلوبين للرجال من 14- 17 جم، وللنساء من 12-14 جم.',
            'type' => 'التبرع بالدم',
            'category' => 'الصحة',
            'contact_phone' => '0225322037',
            'isVerified' => true,
            'image' => 'https://th.bing.com/th/id/OIP.hZzQagA-UM5CDvxEXd2enAHaEb?rs=1&pid=ImgDetMain',
            "volunteer_donation"=>"تبرع"

        ]);
        Organization::insert([
            'name' => 'المركز القومي لنقل الدم بالجيزة',
            'description' => 'أن يكون المتبرع بصحة جيدة ولا يعاني أي أمراض معدية - أن يكون عمر المتبرع من 18-65 سنة - يجب أن لا يقل وزن المتبرع عن 50 كجم -  أن يكون النبض بين 50-100 في الدقيقة -  أن لا تزيد درجة الحرارة عن 37 درجة مئوية -  أن يكون معدل ضغط الدم أقل من120/80 ملم زئبق -  أن تكون نسبة الهيموجلوبين للرجال من 14- 17 جم، وللنساء من 12-14 جم.',
            'type' => 'التبرع بالدم',
            'category' => 'الصحة',
            'contact_phone' => '0237613117',
            'isVerified' => true,
            'image' => 'https://th.bing.com/th/id/OIP.hZzQagA-UM5CDvxEXd2enAHaEb?rs=1&pid=ImgDetMain',
            "volunteer_donation"=>"تبرع"

        ]);
        Organization::insert([
            'name' => 'المركز الاقليمي بدمنهور',
            'description' => 'أن يكون المتبرع بصحة جيدة ولا يعاني أي أمراض معدية - أن يكون عمر المتبرع من 18-65 سنة - يجب أن لا يقل وزن المتبرع عن 50 كجم -  أن يكون النبض بين 50-100 في الدقيقة -  أن لا تزيد درجة الحرارة عن 37 درجة مئوية -  أن يكون معدل ضغط الدم أقل من120/80 ملم زئبق -  أن تكون نسبة الهيموجلوبين للرجال من 14- 17 جم، وللنساء من 12-14 جم.',
            'type' => 'التبرع بالدم',
            'category' => 'الصحة',
            'contact_phone' => '0453337097',
            'isVerified' => true,
            'image' => 'https://th.bing.com/th/id/OIP.hZzQagA-UM5CDvxEXd2enAHaEb?rs=1&pid=ImgDetMain',
            "volunteer_donation"=>"تبرع"

        ]);
        Organization::insert([
            'name' => 'المركز الاقليمي بالمنصورة',
            'description' => 'أن يكون المتبرع بصحة جيدة ولا يعاني أي أمراض معدية - أن يكون عمر المتبرع من 18-65 سنة - يجب أن لا يقل وزن المتبرع عن 50 كجم -  أن يكون النبض بين 50-100 في الدقيقة -  أن لا تزيد درجة الحرارة عن 37 درجة مئوية -  أن يكون معدل ضغط الدم أقل من120/80 ملم زئبق -  أن تكون نسبة الهيموجلوبين للرجال من 14- 17 جم، وللنساء من 12-14 جم.',
            'type' => 'التبرع بالدم',
            'category' => 'الصحة',
            'contact_phone' => '0502266791',
            'isVerified' => true,
            'image' => 'https://th.bing.com/th/id/OIP.hZzQagA-UM5CDvxEXd2enAHaEb?rs=1&pid=ImgDetMain',
            "volunteer_donation"=>"تبرع"

        ]);
        Organization::insert([
            'name' => 'المركز الاقليمي في طنطا',
            'description' => 'أن يكون المتبرع بصحة جيدة ولا يعاني أي أمراض معدية - أن يكون عمر المتبرع من 18-65 سنة - يجب أن لا يقل وزن المتبرع عن 50 كجم -  أن يكون النبض بين 50-100 في الدقيقة -  أن لا تزيد درجة الحرارة عن 37 درجة مئوية -  أن يكون معدل ضغط الدم أقل من120/80 ملم زئبق -  أن تكون نسبة الهيموجلوبين للرجال من 14- 17 جم، وللنساء من 12-14 جم.',
            'type' => 'التبرع بالدم',
            'category' => 'الصحة',
            'contact_phone' => '0403509575',
            'isVerified' => true,
            'image' => 'https://th.bing.com/th/id/OIP.hZzQagA-UM5CDvxEXd2enAHaEb?rs=1&pid=ImgDetMain',
            "volunteer_donation"=>"تبرع"

        ]);
        Organization::insert([
            'name' => 'المركز الاقليمي بالاسماعيلية',
            'description' => 'أن يكون المتبرع بصحة جيدة ولا يعاني أي أمراض معدية - أن يكون عمر المتبرع من 18-65 سنة - يجب أن لا يقل وزن المتبرع عن 50 كجم -  أن يكون النبض بين 50-100 في الدقيقة -  أن لا تزيد درجة الحرارة عن 37 درجة مئوية -  أن يكون معدل ضغط الدم أقل من120/80 ملم زئبق -  أن تكون نسبة الهيموجلوبين للرجال من 14- 17 جم، وللنساء من 12-14 جم.',
            'type' => 'التبرع بالدم',
            'category' => 'الصحة',
            'contact_phone' => '0643103837',
            'isVerified' => true,
            'image' => 'https://th.bing.com/th/id/OIP.hZzQagA-UM5CDvxEXd2enAHaEb?rs=1&pid=ImgDetMain',
            "volunteer_donation"=>"تبرع"

        ]);
        Organization::insert([
            'name' => 'المركز الاقليمي بالزقازيق',
            'description' => 'أن يكون المتبرع بصحة جيدة ولا يعاني أي أمراض معدية - أن يكون عمر المتبرع من 18-65 سنة - يجب أن لا يقل وزن المتبرع عن 50 كجم -  أن يكون النبض بين 50-100 في الدقيقة -  أن لا تزيد درجة الحرارة عن 37 درجة مئوية -  أن يكون معدل ضغط الدم أقل من120/80 ملم زئبق -  أن تكون نسبة الهيموجلوبين للرجال من 14- 17 جم، وللنساء من 12-14 جم.',
            'type' => 'التبرع بالدم',
            'category' => 'الصحة',
            'contact_phone' => '0552380742',
            'isVerified' => true,
            'image' => 'https://th.bing.com/th/id/OIP.hZzQagA-UM5CDvxEXd2enAHaEb?rs=1&pid=ImgDetMain',
            "volunteer_donation"=>"تبرع"

        ]);
        Organization::insert([
            'name' => 'المركز الاقليمي ببنها',
            'description' => 'أن يكون المتبرع بصحة جيدة ولا يعاني أي أمراض معدية - أن يكون عمر المتبرع من 18-65 سنة - يجب أن لا يقل وزن المتبرع عن 50 كجم -  أن يكون النبض بين 50-100 في الدقيقة -  أن لا تزيد درجة الحرارة عن 37 درجة مئوية -  أن يكون معدل ضغط الدم أقل من120/80 ملم زئبق -  أن تكون نسبة الهيموجلوبين للرجال من 14- 17 جم، وللنساء من 12-14 جم.',
            'type' => 'التبرع بالدم',
            'category' => 'الصحة',
            'contact_phone' => '0132530179',
            'isVerified' => true,
            'image' => 'https://th.bing.com/th/id/OIP.hZzQagA-UM5CDvxEXd2enAHaEb?rs=1&pid=ImgDetMain',
            "volunteer_donation"=>"تبرع"

        ]);
        Organization::insert([
            'name' => 'المركز الاقليمي بشبين الكوم',
            'description' => 'أن يكون المتبرع بصحة جيدة ولا يعاني أي أمراض معدية - أن يكون عمر المتبرع من 18-65 سنة - يجب أن لا يقل وزن المتبرع عن 50 كجم -  أن يكون النبض بين 50-100 في الدقيقة -  أن لا تزيد درجة الحرارة عن 37 درجة مئوية -  أن يكون معدل ضغط الدم أقل من120/80 ملم زئبق -  أن تكون نسبة الهيموجلوبين للرجال من 14- 17 جم، وللنساء من 12-14 جم.',
            'type' => 'التبرع بالدم',
            'category' => 'الصحة',
            'contact_phone' => '0482331379',
            'isVerified' => true,
            'image' => 'https://th.bing.com/th/id/OIP.hZzQagA-UM5CDvxEXd2enAHaEb?rs=1&pid=ImgDetMain',
            "volunteer_donation"=>"تبرع"

        ]);
        Organization::insert([
            'name' => 'مركز الاقليمي ببني سويف',
            'description' => 'أن يكون المتبرع بصحة جيدة ولا يعاني أي أمراض معدية - أن يكون عمر المتبرع من 18-65 سنة - يجب أن لا يقل وزن المتبرع عن 50 كجم -  أن يكون النبض بين 50-100 في الدقيقة -  أن لا تزيد درجة الحرارة عن 37 درجة مئوية -  أن يكون معدل ضغط الدم أقل من120/80 ملم زئبق -  أن تكون نسبة الهيموجلوبين للرجال من 14- 17 جم، وللنساء من 12-14 جم.',
            'type' => 'التبرع بالدم',
            'category' => 'الصحة',
            'contact_phone' => '0822088186',
            'isVerified' => true,
            'image' => 'https://th.bing.com/th/id/OIP.hZzQagA-UM5CDvxEXd2enAHaEb?rs=1&pid=ImgDetMain',
            "volunteer_donation"=>"تبرع"

        ]);
        Organization::insert([
            'name' => 'المركز الاقليمي بكفر الشيخ',
            'description' => 'أن يكون المتبرع بصحة جيدة ولا يعاني أي أمراض معدية - أن يكون عمر المتبرع من 18-65 سنة - يجب أن لا يقل وزن المتبرع عن 50 كجم -  أن يكون النبض بين 50-100 في الدقيقة -  أن لا تزيد درجة الحرارة عن 37 درجة مئوية -  أن يكون معدل ضغط الدم أقل من120/80 ملم زئبق -  أن تكون نسبة الهيموجلوبين للرجال من 14- 17 جم، وللنساء من 12-14 جم.',
            'type' => 'التبرع بالدم',
            'category' => 'الصحة',
            'contact_phone' => '0473220249',
            'isVerified' => true,
            'image' => 'https://th.bing.com/th/id/OIP.hZzQagA-UM5CDvxEXd2enAHaEb?rs=1&pid=ImgDetMain',
            "volunteer_donation"=>"تبرع"

        ]);
        Organization::insert([
            'name' => 'المركز الاقليمي بشرم الشيخ',
            'description' => 'أن يكون المتبرع بصحة جيدة ولا يعاني أي أمراض معدية - أن يكون عمر المتبرع من 18-65 سنة - يجب أن لا يقل وزن المتبرع عن 50 كجم -  أن يكون النبض بين 50-100 في الدقيقة -  أن لا تزيد درجة الحرارة عن 37 درجة مئوية -  أن يكون معدل ضغط الدم أقل من120/80 ملم زئبق -  أن تكون نسبة الهيموجلوبين للرجال من 14- 17 جم، وللنساء من 12-14 جم.',
            'type' => 'التبرع بالدم',
            'category' => 'الصحة',
            'contact_phone' => '0693661640',
            'isVerified' => true,
            'image' => 'https://th.bing.com/th/id/OIP.hZzQagA-UM5CDvxEXd2enAHaEb?rs=1&pid=ImgDetMain',
            "volunteer_donation"=>"تبرع"

        ]);
        Organization::insert([
            'name' => 'المركز الاقليمي بالغردقة',
            'description' => 'أن يكون المتبرع بصحة جيدة ولا يعاني أي أمراض معدية - أن يكون عمر المتبرع من 18-65 سنة - يجب أن لا يقل وزن المتبرع عن 50 كجم -  أن يكون النبض بين 50-100 في الدقيقة -  أن لا تزيد درجة الحرارة عن 37 درجة مئوية -  أن يكون معدل ضغط الدم أقل من120/80 ملم زئبق -  أن تكون نسبة الهيموجلوبين للرجال من 14- 17 جم، وللنساء من 12-14 جم.',
            'type' => 'التبرع بالدم',
            'category' => 'الصحة',
            'contact_phone' => '0653614015',
            'isVerified' => true,
            'image' => 'https://th.bing.com/th/id/OIP.hZzQagA-UM5CDvxEXd2enAHaEb?rs=1&pid=ImgDetMain',
            "volunteer_donation"=>"تبرع"

        ]);
        Organization::insert([
            'name' => 'المركز الاقليمي بمرسى مطروح',
            'description' => 'أن يكون المتبرع بصحة جيدة ولا يعاني أي أمراض معدية - أن يكون عمر المتبرع من 18-65 سنة - يجب أن لا يقل وزن المتبرع عن 50 كجم -  أن يكون النبض بين 50-100 في الدقيقة -  أن لا تزيد درجة الحرارة عن 37 درجة مئوية -  أن يكون معدل ضغط الدم أقل من120/80 ملم زئبق -  أن تكون نسبة الهيموجلوبين للرجال من 14- 17 جم، وللنساء من 12-14 جم.',
            'type' => 'التبرع بالدم',
            'category' => 'الصحة',
            'contact_phone' => '0464935368',
            'isVerified' => true,
            'image' => 'https://th.bing.com/th/id/OIP.hZzQagA-UM5CDvxEXd2enAHaEb?rs=1&pid=ImgDetMain',
            "volunteer_donation"=>"تبرع"

        ]);
        Organization::insert([
            'name' => 'المركز الاقليمي بالفيوم',
            'description' => 'أن يكون المتبرع بصحة جيدة ولا يعاني أي أمراض معدية - أن يكون عمر المتبرع من 18-65 سنة - يجب أن لا يقل وزن المتبرع عن 50 كجم -  أن يكون النبض بين 50-100 في الدقيقة -  أن لا تزيد درجة الحرارة عن 37 درجة مئوية -  أن يكون معدل ضغط الدم أقل من120/80 ملم زئبق -  أن تكون نسبة الهيموجلوبين للرجال من 14- 17 جم، وللنساء من 12-14 جم.',
            'type' => 'التبرع بالدم',
            'category' => 'الصحة',
            'contact_phone' => '0842170311',
            'isVerified' => true,
            'image' => 'https://th.bing.com/th/id/OIP.hZzQagA-UM5CDvxEXd2enAHaEb?rs=1&pid=ImgDetMain',
            "volunteer_donation"=>"تبرع"

        ]);
        Organization::insert([
            'name' => 'المركز الاقليمي بالعريش',
            'description' => 'أن يكون المتبرع بصحة جيدة ولا يعاني أي أمراض معدية - أن يكون عمر المتبرع من 18-65 سنة - يجب أن لا يقل وزن المتبرع عن 50 كجم -  أن يكون النبض بين 50-100 في الدقيقة -  أن لا تزيد درجة الحرارة عن 37 درجة مئوية -  أن يكون معدل ضغط الدم أقل من120/80 ملم زئبق -  أن تكون نسبة الهيموجلوبين للرجال من 14- 17 جم، وللنساء من 12-14 جم.',
            'type' => 'التبرع بالدم',
            'category' => 'الصحة',
            'contact_phone' => '0683352525',
            'isVerified' => true,
            'image' => 'https://th.bing.com/th/id/OIP.hZzQagA-UM5CDvxEXd2enAHaEb?rs=1&pid=ImgDetMain',
            "volunteer_donation"=>"تبرع"

        ]);
        Organization::insert([
            'name' => 'المركز الاقليمي بدمياط',
            'description' => 'أن يكون المتبرع بصحة جيدة ولا يعاني أي أمراض معدية - أن يكون عمر المتبرع من 18-65 سنة - يجب أن لا يقل وزن المتبرع عن 50 كجم -  أن يكون النبض بين 50-100 في الدقيقة -  أن لا تزيد درجة الحرارة عن 37 درجة مئوية -  أن يكون معدل ضغط الدم أقل من120/80 ملم زئبق -  أن تكون نسبة الهيموجلوبين للرجال من 14- 17 جم، وللنساء من 12-14 جم.',
            'type' => 'التبرع بالدم',
            'category' => 'الصحة',
            'contact_phone' => '0572379696',
            'isVerified' => true,
            'image' => 'https://th.bing.com/th/id/OIP.hZzQagA-UM5CDvxEXd2enAHaEb?rs=1&pid=ImgDetMain',
            "volunteer_donation"=>"تبرع"

        ]);
        Organization::insert([
            'name' => 'المركز الاقليمي بالسويس',
            'description' => 'أن يكون المتبرع بصحة جيدة ولا يعاني أي أمراض معدية - أن يكون عمر المتبرع من 18-65 سنة - يجب أن لا يقل وزن المتبرع عن 50 كجم -  أن يكون النبض بين 50-100 في الدقيقة -  أن لا تزيد درجة الحرارة عن 37 درجة مئوية -  أن يكون معدل ضغط الدم أقل من120/80 ملم زئبق -  أن تكون نسبة الهيموجلوبين للرجال من 14- 17 جم، وللنساء من 12-14 جم.',
            'type' => 'التبرع بالدم',
            'category' => 'الصحة',
            'contact_phone' => '0623444093',
            'isVerified' => true,
            'image' => 'https://th.bing.com/th/id/OIP.hZzQagA-UM5CDvxEXd2enAHaEb?rs=1&pid=ImgDetMain',
            "volunteer_donation"=>"تبرع"

        ]);
        Organization::insert([
            'name' => 'المركز الاقليمي ببورسعيد',
            'description' => 'أن يكون المتبرع بصحة جيدة ولا يعاني أي أمراض معدية - أن يكون عمر المتبرع من 18-65 سنة - يجب أن لا يقل وزن المتبرع عن 50 كجم -  أن يكون النبض بين 50-100 في الدقيقة -  أن لا تزيد درجة الحرارة عن 37 درجة مئوية -  أن يكون معدل ضغط الدم أقل من120/80 ملم زئبق -  أن تكون نسبة الهيموجلوبين للرجال من 14- 17 جم، وللنساء من 12-14 جم.',
            'type' => 'التبرع بالدم',
            'category' => 'الصحة',
            'contact_phone' => '0663221605',
            'isVerified' => true,
            'image' => 'https://th.bing.com/th/id/OIP.hZzQagA-UM5CDvxEXd2enAHaEb?rs=1&pid=ImgDetMain',
            "volunteer_donation"=>"تبرع"

        ]);
        Organization::insert([
            'name' => 'الهلال الأحمر المصري',
            'description' => 'يعمل الهلال الأحمر المصري على تقديم المساعدات الإنسانية بغض النظر عن اختلاف العرق أو الدين أو النوع، وذلك من خلال مجال الإغاثة والصحة العامة',
            'type' => 'التبرع بالوقت و المجهود',
            'category' => 'الإغاثة ومواجهة الكوارث - التنمية الصحية - التنمية الاجتماعية - تنمية قدرات الهلال الأحمر المصري -  توثيق التعاون مع المجتمع الدولي',
            'contact_phone' => '02 25985555',
            'isVerified' => true,
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e4/Egyptian_Red_Crescent.png/640px-Egyptian_Red_Crescent.png',
            "volunteer_donation"=>"تبرع"

        ]);
        Organization::insert([
            'name' => 'صندوق تحيا مصر',
            'description' => 'في 1 يوليو 2014 أعلنت رئاسة الجمهورية عن تدشين صندوق تحيا مصر تفعيلًا للمبادرة التي سبق وأعلنها الرئيس بإنشاء صندوق لدعم الاقتصاد',
            'type' => 'التبرع بالوقت والمجهود',
            'category' => 'تنمية حياة الانسان',
            'contact_phone' => '15118',
            'isVerified' => true,
            'image' => 'https://www.sis.gov.eg/Content/Upload/slider/620221923471858.jpg',
            "volunteer_donation"=>"تبرع"

        ]);



        Organization::insert([
            'name' => 'مؤسسة الاغاثة والطوارئ',
            'description' => 'مؤسسة تنموية اهلية وطنية غير حكومية وغير هادفة للربح تعمل علي تمكين الافراد والمجتمعات صحياً ومعرفياً لتحسين جودة الحياة وتعتبر الأنسان وسعادتهُ هدفاً للتنمية المستدامة',
            'type' => 'التطوع للإغاثة والطوارئ',
            'category' => 'القضاء على الفقر والجوع - الإستجابة للأزمات والكوارث - دعم منظمات المجتمع المدني',
            'contact_phone' => '01068850770',
            'isVerified' => true,
            'image' => 'https://megakheir.com/wp-content/uploads/2023/03/Logo-new.png',
            "volunteer_donation"=>"تطوع"

        ]);
        Organization::insert([
            'name' => 'مكتبة الاسكندرية',
            'description' => '',
            'type' => 'التطوع الثقافي',
            'category' => 'خدمات مرجعية - مكتبة الطفل - إداري سفريات -',
            'contact_phone' => 'to be found',
            'isVerified' => false,
            'image' => 'https://www.arabcont.com/Images/ProjectImage/AlexLib02.jpg',
            "volunteer_donation"=>"تطوع"

        ]);
        Organization::insert([
            'name' => 'أصدقاء القصر العيني',
            'description' => 'تقدم فرص التطوع في مجال الرعاية الصحية، حيث يمكن للمتطوعين المساهمة في تقديم الدعم والرعاية للمرضى في مستشفى القصر العيني بالقاهرة.',
            'type' => 'التطوع الدائم',
            'category' => 'الرعاية الصحية',
            'contact_phone' => 'to be found',
            'isVerified' => false,
            'image' => 'to be found',
            "volunteer_donation"=>"تطوع"

        ]);
        Organization::insert([
            'name' => 'جمعية رعاية المعوقين',
            'description' => 'تعمل على تقديم الدعم والخدمات للأشخاص ذوي الإعاقة. يمكن للمتطوعين المساعدة في رعاية المعوقين وتقديم الدعم اليومي لهم.',
            'type' => 'التطوع الدائم',
            'category' => 'رعاية المعوقين وتقديم الدعم لهم',
            'contact_phone' => 'to be found',
            'isVerified' => false,
            'image' => 'https://media.licdn.com/dms/image/D4D1BAQGHaZsy1iiN5g/company-background_10000/0/1659866153023/al_diar__cover?e=2147483647&v=beta&t=lZ_P-ldj6wOPMQOTktfPT3raWRrnVSQu1Eo5EK0Ytzw',
            "volunteer_donation"=>"تطوع"

        ]);
        Organization::insert([
            'name' => 'مؤسسة الأورمان',
            'description' => 'تعمل في مجالات متنوعة مثل التعليم والصحة والتنمية المجتمعية. توفر فرص التطوع في مجالات مختلفة حسب احتياجات المؤسسة في الوقت الحالي.',
            'type' => 'التطوع الدائم',
            'category' => 'التعليم - الصحة - التنمية المجتمعية',
            'contact_phone' => 'to be found',
            'isVerified' => false,
            'image' => 'https://1.bp.blogspot.com/-RjHtZYUHg40/YQcZ4w_-V5I/AAAAAAAAXAc/ocjrNqnTDR8TmrhmQAurA_YVy14ya2-EgCLcBGAsYHQ/s16000-rw/%25D8%25AC%25D9%2585%25D8%25B9%25D9%258A%25D8%25A9-%25D8%25A7%25D9%2584%25D8%25A3%25D9%2588%25D8%25B1%25D9%2585%25D8%25A7%25D9%2586.png',
            "volunteer_donation"=>"تطوع"

        ]);
        Organization::insert([
            'name' => 'مبادرة مصر تستطيع',
            'description' => 'تعمل على توفير المساعدة للفئات الأكثر احتياجًا في المجتمع المصري',
            'type' => 'التطوع المؤقت',
            'category' => 'توزيع السلال الغذائية - تنظيم فعاليات ثقافية وتعليمية',
            'contact_phone' => 'to be found',
            'isVerified' => false,
            'image' => 'https://www.shorouknews.com/uploadedimages/Sections/Egypt/original/mesaw.jpg',
            "volunteer_donation"=>"تطوع"

        ]);
        Organization::insert([
            'name' => 'جمعية خيركم',
            'description' => 'تعمل في مجال الإغاثة والتنمية المجتمعية',
            'type' => 'التطوع المؤقت',
            'category' => 'توزيع المساعدات الغذائية - الملابس - تنظيم الفعاليات الخيرية.',
            'contact_phone' => 'to be found',
            'isVerified' => false,
            'image' => 'https://guidetoquran.com/media/logo2370c1a72405_showCenterThumb.png',
            "volunteer_donation"=>"تطوع"

        ]);
        Organization::insert([
            'name' => 'جمعية نور الحياة',
            'description' => 'تقدم الدعم للأيتام والأسر المحتاجة.',
            'type' => 'التطوع المؤقت',
            'category' => 'تقدم الدعم للأيتام والأسر المحتاجة - تقديم الدعم النفسي والتعليمي والترفيهي للأطفال.',
            'contact_phone' => 'to be found',
            'isVerified' => false,
            'image' => 'https://16139.tel/logo/16139.png',
            "volunteer_donation"=>"تطوع"

        ]);
        Organization::insert([
            'name' => 'جمعية زينة',
            'description' => 'تعنى بتحسين وتطوير المجتمع المحلي من خلال مشاريع التعليم والتنمية الاجتماعية. توفر فرص التطوع في مجالات مثل التدريب المهني والتعليم والتنمية الشخصية.',
            'type' => 'التطوع المؤقت',
            'category' => 'التدريب المهني - التعليم - التنمية الشخصية.',
            'contact_phone' => 'to be found',
            'isVerified' => false,
            'image' => 'https://balady.ps/uploads/16465615231579853511.png',
            "volunteer_donation"=>"تطوع"

        ]);
        Organization::insert([
            'name' => 'جمعية السلام للتنمية والتطوير',
            'description' => 'تعمل على تنمية المجتمعات المحلية من خلال مشاريع التعليم والتنمية الاقتصادية والرياضة. يمكن للمتطوعين المساهمة في تنفيذ برامج وفعاليات مؤقتة.',
            'type' => 'التطوع المؤقت',
            'category' => 'تنمية المجتمعات',
            'contact_phone' => 'to be found',
            'isVerified' => false,
            'image' => 'https://paltoday.ps/ar/thumb/w760/uploads/images/2022/10/GD9GK.jpg',
            "volunteer_donation"=>"تطوع"

        ]);
        Organization::insert([
            'name' => 'جمعية سيدات أعمال المستقبل',
            'description' => 'هي منظمة تهدف إلى دعم وتمكين النساء في مجال ريادة الأعمال والقيادة. يمكنك الاتصال بالجمعية مباشرة للاستفسار عن فرص الانضمام كعضو أو المشاركة في فعالياتها وبرامجها.',
            'type' => 'التطوع المؤقت',
            'category' => 'تمكين النساء في مجال ريادة الأعمال والقيادة.',
            'contact_phone' => 'to be found',
            'isVerified' => false,
            'image' => 'https://www.msme.eg//MappedFolder/ar/Lists/EntityDocument/64_Logo.jpg',
            "volunteer_donation"=>"تطوع"
        ]);
    }
}
