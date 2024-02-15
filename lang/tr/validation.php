<?php




return [
    'accepted' => ':attribute kabul edilmelidir.',
    'accepted_if' => ':other :value olduğunda :attribute kabul edilmelidir.',
    'active_url' => ':attribute geçerli bir URL değil.',
    'after' => ':attribute :date tarihinden sonra olmalıdır.',
    'after_or_equal' => ':attribute :date tarihinden sonra veya aynı tarih olmalıdır.',
    'alpha' => ':attribute sadece harfler içermelidir.',
    'alpha_dash' => ':attribute sadece harfler, rakamlar, tireler ve alt çizgiler içerebilir.',
    'alpha_num' => ':attribute sadece harf ve rakam içermelidir.',
    'array' => ':attribute bir dizi olmalıdır.',
    'ascii' => ':attribute yalnızca tek baytlık alfasayısal karakterler ve semboller içermelidir.',
    'before' => ':attribute :date tarihinden önce olmalıdır.',
    'before_or_equal' => ':attribute :date tarihinden önce veya aynı tarih olmalıdır.',
    'between' => [
        'array' => ':attribute :min ile :max arasında öğe içermelidir.',
        'file' => ':attribute :min ile :max kilobayt arasında olmalıdır.',
'numeric' => ':attribute :min ile :max arasında olmalıdır.',
'string' => ':attribute :min ile :max karakter arasında olmalıdır.',
],
'boolean' => ':attribute alanı doğru veya yanlış olmalıdır.',
'confirmed' => ':attribute onayı eşleşmiyor.',
'current_password' => 'Şifre yanlış.',
'date' => ':attribute geçerli bir tarih değil.',
'date_equals' => ':attribute, :date ile aynı bir tarih olmalıdır.',
'date_format' => ':attribute, :format formatına uymuyor.',
'decimal' => ':attribute, :decimal ondalık basamağa sahip olmalıdır.',
'declined' => ':attribute reddedilmelidir.',
'declined_if' => ':other :value olduğunda :attribute reddedilmelidir.',
'different' => ':attribute ve :other farklı olmalıdır.',
'digits' => ':attribute :digits basamaklı olmalıdır.',
'digits_between' => ':attribute :min ile :max basamak arasında olmalıdır.',
'dimensions' => ':attribute geçersiz resim boyutlarına sahip.',
'distinct' => ':attribute alanı yinelenen bir değere sahiptir.',
'doesnt_end_with' => ':attribute, aşağıdakilerden biri ile bitmemelidir: :values.',
'doesnt_start_with' => ':attribute, aşağıdakilerden biri ile başlamamalıdır: :values.',
'email' => ':attribute geçerli bir e-posta adresi olmalıdır.',
'ends_with' => ':attribute, aşağıdakilerden biri ile bitmelidir: :values.',
'enum' => 'Seçilen :attribute geçersiz.',
'exists' => 'Seçilen :attribute geçersiz.',
'file' => ':attribute bir dosya olmalıdır.',
'filled' => ':attribute alanı bir değere sahip olmalıdır.',
'gt' => [
    'array' => ':attribute :value öğeden fazla olmalıdır.',
    'file' => ':attribute :value kilobayttan büyük olmalıdır.',
    'numeric' => ':attribute :value değerinden büyük olmalıdır.',
    'string' => ':attribute :value karakterden uzun olmalıdır.',
],
'gte' => [
    'array' => ':attribute en az :value öğe içermelidir.',
    'file' => ':attribute :value kilobayt veya daha fazla olmalıdır.',
    'numeric' => ':attribute :value veya daha büyük olmalıdır.',
    'string' => ':attribute :value karakter veya daha fazla olmalıdır.',
],
'image' => ':attribute bir resim olmalıdır.',
'in' => 'Seçilen :attribute geçersiz.',
'in_array' => ':attribute alanı :other içinde mevcut değil.',
'integer' => ':attribute bir tam sayı olmalıdır.',
'ip' => ':attribute geçerli bir IP adresi olmalıdır.',
'ipv4' => ':attribute geçerli bir IPv4 adresi olmalıdır.',
'ipv6' => ':attribute geçerli bir IPv6 adresi olmalıdır.',
'json' => ':attribute geçerli bir JSON dizgesi olmalıdır.',
'lowercase' => ':attribute küçük harf olmalıdır.',
'lt' => [
    'array' => ':attribute :value öğeden az olmalıdır.',
    'file' => ':attribute :value kilobayttan az olmalıdır.',
    'numeric' => ':attribute :value\'den küçük olmalıdır.',
    'string' => ':attribute :value karakterden az olmalıdır.',
],
'lte' => [
    'array' => ':attribute :value öğeden fazla olmamalıdır.',
    'file' => ':attribute :value kilobayt veya daha az olmalıdır.',
    'numeric' => ':attribute :value veya daha küçük olmalıdır.',
    'string' => ':attribute :value karakter veya daha az olmalıdır.',
],
'mac_address' => ':attribute geçerli bir MAC adresi olmalıdır.',
'max' => [
    'array' => ':attribute :max öğeden fazla olmamalıdır.',
    'file' => ':attribute :max kilobayttan büyük olmamalıdır.',
    'numeric' => ':attribute :max\'den büyük olmamalıdır.',
    'string' => ':attribute :max karakterden büyük olmamalıdır.',
],
'max_digits' => ':attribute :max basamaktan fazla olmamalıdır.',
'mimes' => ':attribute dosya türü şu olmalıdır: :values.',
'mimetypes' => ':attribute dosya türü şu olmalıdır: :values.',
'min' => [
    'array' => ':attribute en az :min öğe içermelidir.',
    'file' => ':attribute en az :min kilobayt olmalıdır.',
    'numeric' => ':attribute en az :min olmalıdır.',
    'string' => ':attribute en az :min karakter olmalıdır.',
],
'min_digits' => ':attribute en az :min basamak içermelidir.',
'missing' => ':attribute alanı eksik olmalıdır.',
'missing_if' => ':other :value olduğunda :attribute alanı eksik olmalıdır.',
'missing_unless' => ':other :value olmadığında :attribute alanı eksik olmalıdır.',
'missing_with' => ':values mevcut olduğunda :attribute alanı eksik olmalıdır.',
'missing_with_all' => ':values mevcut olduğunda :attribute alanı eksik olmalıdır.',
'multiple_of' => ':attribute :value\'nin katı olmalıdır.',
'not_in' => 'Seçilen :attribute geçersiz.',
'not_regex' => ':attribute biçimi geçersizdir.',
'numeric' => ':attribute bir sayı olmalıdır.',
'password' => [
    'letters' => ':attribute en az bir harf içermelidir.',
    'mixed' => ':attribute en az bir büyük ve bir küçük harf içermelidir.',
    'numbers' => ':attribute en az bir rakam içermelidir.',
    'symbols' => ':attribute en az bir sembol içermelidir.',
    'uncompromised' => 'Verilen :attribute veri sızıntısında görüldü. Lütfen farklı bir :attribute seçin.',
],
'present' => ':attribute alanı mevcut olmalıdır.',
'prohibited' => ':attribute alanı yasaktır.',
'prohibited_if' => ':other :value olduğunda :attribute alanı yasaktır.',
'prohibited_unless' => ':other :values içinde olmadığında :attribute alanı yasaktır.',
'prohibits' => ':attribute alanı :other mevcutken yasaktır.',
'regex' => ':attribute formatı geçersizdir.',
'required' => ':attribute alanı gereklidir.',
'required_array_keys' => ':attribute alanı için girişler bulunmalıdır: :values.',
'required_if' => ':other :value olduğunda :attribute alanı gereklidir.',
'required_if_accepted' => ':other kabul edildiğinde :attribute alanı gereklidir.',
'required_unless' => ':other :values içinde olmadığında :attribute alanı gereklidir.',
'required_with' => ':values mevcut olduğunda :attribute alanı gereklidir.',
'required_with_all' => ':values mevcut olduğunda :attribute alanı gereklidir.',
'required_without' => ':values mevcut olmadığında :attribute alanı gereklidir.',
'required_without_all' => ':values hiçbiri mevcut olmadığında :attribute alanı gereklidir.',
'same' => ':attribute ve :other eşleşmelidir.',
'size' => [
    'array' => ':attribute :size öğe içermelidir.',
    'file' => ':attribute :size kilobayt olmalıdır.',
    'numeric' => ':attribute :size olmalıdır.',
    'string' => ':attribute :size karakter olmalıdır.',
],
'starts_with' => ':attribute şu değerlerden biriyle başlamalıdır: :values.',
'string' => ':attribute bir dize olmalıdır.',
'timezone' => ':attribute geçerli bir saat dilimi olmalıdır.',
'unique' => ':attribute zaten alınmıştır.',
'uploaded' => ':attribute yüklenemedi.',
'uppercase' => ':attribute büyük harf olmalıdır.',
'url' => ':attribute geçerli bir URL olmalıdır.',
'ulid' => ':attribute geçerli bir ULID olmalıdır.',
'uuid' => ':attribute geçerli bir UUID olmalıdır.',


'custom' => [
    'attribute-name' => [
        'rule-name' => 'özel-mesaj',
    ],
],


'attributes' => [],


];
