<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Bio
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Bio newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bio newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bio query()
 */
	class Bio extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Contact
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact query()
 */
	class Contact extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Cv_list
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Cv_list newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cv_list newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cv_list query()
 * @mixin \Eloquent
 */
	class Cv_list extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Cv
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Cv newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cv newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cv query()
 * @mixin \Eloquent
 */
	class Cv extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Image
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Image newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Image newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Image query()
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereUpdatedAt($value)
 */
	class Image extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MainBanner
 *
 * @method static \Illuminate\Database\Eloquent\Builder|MainBanner newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MainBanner newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MainBanner query()
 */
	class MainBanner extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Post
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post query()
 */
	class Post extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Video
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Video newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Video newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Video query()
 */
	class Video extends \Eloquent {}
}

