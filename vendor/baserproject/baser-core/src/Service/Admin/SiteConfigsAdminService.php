<?php
/**
 * baserCMS :  Based Website Development Project <https://basercms.net>
 * Copyright (c) NPO baser foundation <https://baserfoundation.org/>
 *
 * @copyright     Copyright (c) NPO baser foundation
 * @link          https://basercms.net baserCMS Project
 * @since         5.0.0
 * @license       https://basercms.net/license/index.html MIT License
 */

namespace BaserCore\Service\Admin;

use BaserCore\Service\SiteConfigsService;
use BaserCore\Utility\BcUtil;
use Cake\Core\Configure;
use Cake\Datasource\EntityInterface;
use BaserCore\Annotation\Note;
use BaserCore\Annotation\NoTodo;
use BaserCore\Annotation\Checked;
use BaserCore\Annotation\UnitTest;

/**
 * SiteConfigsAdminService
 */
class SiteConfigsAdminService extends SiteConfigsService implements SiteConfigsAdminServiceInterface
{

    /**
     * サイト基本設定画面用のデータを取得
     * @param EntityInterface $siteConfig
     * @return array
     * @checked
     * @noTodo
     * @unitTest
     */
    public function getViewVarsForIndex(EntityInterface $siteConfig): array
    {
        return [
            'siteConfig' => $siteConfig,
            'isWritableEnv' => $this->isWritableEnv(),
            'modeList' => $this->getModeList(),
            'adminThemeList' => BcUtil::getAdminThemeList(),
            'editorList' => Configure::read('BcApp.editors'),
            'mailEncodeList' => Configure::read('BcEncode.mail')
        ];
    }

}
