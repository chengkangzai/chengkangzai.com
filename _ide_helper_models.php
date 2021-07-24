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
 * App\Models\CasesMalaysia
 *
 * @property int $id
 * @property string $date
 * @property int $cases_new
 * @property int $cluster_import
 * @property int $cluster_religious
 * @property int $cluster_community
 * @property int $cluster_highRisk
 * @property int $cluster_education
 * @property int $cluster_detentionCentre
 * @property int $cluster_workplace
 * @property int|null $cases_cumulative
 * @method static \Illuminate\Database\Eloquent\Builder|CasesMalaysia newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CasesMalaysia newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CasesMalaysia query()
 * @method static \Illuminate\Database\Eloquent\Builder|CasesMalaysia whereCasesCumulative($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CasesMalaysia whereCasesNew($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CasesMalaysia whereClusterCommunity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CasesMalaysia whereClusterDetentionCentre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CasesMalaysia whereClusterEducation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CasesMalaysia whereClusterHighRisk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CasesMalaysia whereClusterImport($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CasesMalaysia whereClusterReligious($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CasesMalaysia whereClusterWorkplace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CasesMalaysia whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CasesMalaysia whereId($value)
 */
	class CasesMalaysia extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CasesState
 *
 * @property int $id
 * @property string $date
 * @property string $state
 * @property string $cases_new
 * @property string|null $cases_cumulative
 * @method static \Illuminate\Database\Eloquent\Builder|CasesState newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CasesState newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CasesState query()
 * @method static \Illuminate\Database\Eloquent\Builder|CasesState whereCasesCumulative($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CasesState whereCasesNew($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CasesState whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CasesState whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CasesState whereState($value)
 */
	class CasesState extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Cluster
 *
 * @property int $id
 * @property string $cluster
 * @property string $state
 * @property string $district
 * @property string|null $date_announced
 * @property string|null $date_last_onset
 * @property string $category
 * @property string $status
 * @property int $cases_new
 * @property int $cases_total
 * @property int $cases_active
 * @property int $tests
 * @property int $icu
 * @property int $deaths
 * @property int $recovered
 * @method static \Illuminate\Database\Eloquent\Builder|Cluster newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cluster newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cluster query()
 * @method static \Illuminate\Database\Eloquent\Builder|Cluster whereCasesActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cluster whereCasesNew($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cluster whereCasesTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cluster whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cluster whereCluster($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cluster whereDateAnnounced($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cluster whereDateLastOnset($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cluster whereDeaths($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cluster whereDistrict($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cluster whereIcu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cluster whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cluster whereRecovered($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cluster whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cluster whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cluster whereTests($value)
 */
	class Cluster extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Comment
 *
 * @property int $id
 * @property string $comment
 * @property string $email
 * @property string $name
 * @property string $status
 * @property int $post_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Post $post
 * @method static \Database\Factories\CommentFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Comment newQuery()
 * @method static \Illuminate\Database\Query\Builder|Comment onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Comment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Comment withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Comment withoutTrashed()
 */
	class Comment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DeathsMalaysia
 *
 * @property int $id
 * @property string $date
 * @property int $deaths_new
 * @property int|null $deaths_new_cumulative
 * @method static \Illuminate\Database\Eloquent\Builder|DeathsMalaysia newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeathsMalaysia newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeathsMalaysia query()
 * @method static \Illuminate\Database\Eloquent\Builder|DeathsMalaysia whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeathsMalaysia whereDeathsNew($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeathsMalaysia whereDeathsNewCumulative($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeathsMalaysia whereId($value)
 */
	class DeathsMalaysia extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DeathsState
 *
 * @property int $id
 * @property string $date
 * @property string $state
 * @property int $deaths_new
 * @property int|null $deaths_commutative
 * @method static \Illuminate\Database\Eloquent\Builder|DeathsState newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeathsState newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeathsState query()
 * @method static \Illuminate\Database\Eloquent\Builder|DeathsState whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeathsState whereDeathsCommutative($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeathsState whereDeathsNew($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeathsState whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeathsState whereState($value)
 */
	class DeathsState extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Hospital
 *
 * @property int $id
 * @property string $date
 * @property string $state
 * @property int $beds
 * @property int $beds_noncrit Non Critical Beds
 * @property int $admitted_pui
 * @property int $admitted_covid
 * @property int $admitted_total
 * @property int $discharged_pui
 * @property int $discharged_covid
 * @property int $discharged_total
 * @property int $hosp_covid
 * @property int $hosp_pui
 * @property int $hosp_noncovid
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital query()
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital whereAdmittedCovid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital whereAdmittedPui($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital whereAdmittedTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital whereBeds($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital whereBedsNoncrit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital whereDischargedCovid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital whereDischargedPui($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital whereDischargedTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital whereHospCovid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital whereHospNoncovid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital whereHospPui($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital whereState($value)
 */
	class Hospital extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ICU
 *
 * @property int $id
 * @property string $date
 * @property string $state
 * @property int $bed_icu
 * @property int $bed_icu_rep
 * @property int $bed_icu_total
 * @property int $bed_icu_covid
 * @property int $vent
 * @property int $vent_port
 * @property int $icu_covid
 * @property int $icu_pui
 * @property int $icu_noncovid
 * @property int $vent_covid
 * @property int $vent_pui
 * @property int $vent_noncovid
 * @method static \Illuminate\Database\Eloquent\Builder|ICU newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ICU newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ICU query()
 * @method static \Illuminate\Database\Eloquent\Builder|ICU whereBedIcu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ICU whereBedIcuCovid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ICU whereBedIcuRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ICU whereBedIcuTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ICU whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ICU whereIcuCovid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ICU whereIcuNoncovid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ICU whereIcuPui($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ICU whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ICU whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ICU whereVent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ICU whereVentCovid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ICU whereVentNoncovid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ICU whereVentPort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ICU whereVentPui($value)
 */
	class ICU extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PKRC
 *
 * @property int $id
 * @property string $date
 * @property string $state
 * @property int $beds
 * @property int $admitted_pui
 * @property int $admitted_covid
 * @property int $admitted_total
 * @property int $discharge_pui
 * @property int $discharge_covid
 * @property int $discharge_total
 * @property int $pkrc_covid
 * @property int $pkrc_pui
 * @property int $pkrc_noncovid
 * @method static \Illuminate\Database\Eloquent\Builder|PKRC newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PKRC newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PKRC query()
 * @method static \Illuminate\Database\Eloquent\Builder|PKRC whereAdmittedCovid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PKRC whereAdmittedPui($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PKRC whereAdmittedTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PKRC whereBeds($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PKRC whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PKRC whereDischargeCovid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PKRC whereDischargePui($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PKRC whereDischargeTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PKRC whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PKRC wherePkrcCovid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PKRC wherePkrcNoncovid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PKRC wherePkrcPui($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PKRC whereState($value)
 */
	class PKRC extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Population
 *
 * @property int $id
 * @property string $state
 * @property int $idxs
 * @property int $pop
 * @property int $pop_18
 * @property int $pop_60
 * @method static \Illuminate\Database\Eloquent\Builder|Population newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Population newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Population query()
 * @method static \Illuminate\Database\Eloquent\Builder|Population whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Population whereIdxs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Population wherePop($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Population wherePop18($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Population wherePop60($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Population whereState($value)
 */
	class Population extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Post
 *
 * @method static inRandomOrder()
 * @method static paginate()
 * @method static create(array $validated)
 * @method static withCount(string $string)
 * @method static latest()
 * @property mixed status
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Comment[] $comments
 * @property-read int|null $comments_count
 * @property \Illuminate\Database\Eloquent\Collection|\Spatie\Tags\Tag[] $tags
 * @property-read int|null $tags_count
 * @method static \Database\Factories\PostFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post newQuery()
 * @method static \Illuminate\Database\Query\Builder|Post onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Post published()
 * @method static \Illuminate\Database\Eloquent\Builder|Post query()
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post withAllTags(\ArrayAccess|\Spatie\Tags\Tag|array $tags, ?string $type = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Post withAllTagsOfAnyType($tags)
 * @method static \Illuminate\Database\Eloquent\Builder|Post withAnyTags(\ArrayAccess|\Spatie\Tags\Tag|array $tags, ?string $type = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Post withAnyTagsOfAnyType($tags)
 * @method static \Illuminate\Database\Query\Builder|Post withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Post withoutTrashed()
 */
	class Post extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TestMalaysia
 *
 * @property int $id
 * @property string $date
 * @property int $rtk-ag
 * @property int $pcr
 * @method static \Illuminate\Database\Eloquent\Builder|TestMalaysia newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TestMalaysia newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TestMalaysia query()
 * @method static \Illuminate\Database\Eloquent\Builder|TestMalaysia whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestMalaysia whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestMalaysia wherePcr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestMalaysia whereRtkAg($value)
 */
	class TestMalaysia extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorRecoveryCodes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Works
 *
 * @method static paginate(int $int)
 * @method static create(array $array)
 * @method static latest()
 * @method static active()
 * @property int $id
 * @property string $name
 * @property array $description
 * @property string $picture_name
 * @property string|null $url
 * @property string|null $github_url
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $translations
 * @property \Illuminate\Database\Eloquent\Collection|\Spatie\Tags\Tag[] $tags
 * @property-read int|null $tags_count
 * @method static \Database\Factories\WorksFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Works newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Works newQuery()
 * @method static \Illuminate\Database\Query\Builder|Works onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Works query()
 * @method static \Illuminate\Database\Eloquent\Builder|Works whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Works whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Works whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Works whereGithubUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Works whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Works whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Works wherePictureName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Works whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Works whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Works whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Works withAllTags(\ArrayAccess|\Spatie\Tags\Tag|array $tags, ?string $type = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Works withAllTagsOfAnyType($tags)
 * @method static \Illuminate\Database\Eloquent\Builder|Works withAnyTags(\ArrayAccess|\Spatie\Tags\Tag|array $tags, ?string $type = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Works withAnyTagsOfAnyType($tags)
 * @method static \Illuminate\Database\Query\Builder|Works withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Works withoutTrashed()
 */
	class Works extends \Eloquent {}
}

