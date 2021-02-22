<?php


namespace Modules\Terms\Repositories\Repositories;


use Modules\Core\Repositories\Base\BaseRepository;
use Modules\Terms\Entities\TermTaxonomies;
use Modules\Terms\Repositories\Contracts\TaxonomyContract;

class TaxonomyRepository extends BaseRepository  implements TaxonomyContract
{

    public function entity()
    {
        return TermTaxonomies::class;
    }

    public function delete($taxonomy)
    {
        if (!!$taxonomy->subCategories->count()) {
            foreach ($taxonomy->subCategories as $sCat) {
                $sCat->update(['parent' => 0]);
            }
        }

        if ($taxonomy->term) {
            $taxonomy->term->delete();
        }

        return $taxonomy->delete();
    }
}
