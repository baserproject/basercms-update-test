<?php
/**
 * baserCMS :  Based Website Development Project <https://basercms.net>
 * Copyright (c) baserCMS Users Community <https://basercms.net/community/>
 *
 * @copyright       Copyright (c) baserCMS Users Community
 * @link            https://basercms.net baserCMS Project
 * @since           baserCMS v 0.1.0
 * @license         https://basercms.net/license/index.html
 */

/**
 * [ADMIN] スキーマ書き出しフォーム　ヘルプ
 */
?>


<p><?php echo __d('baser_core', 'スキーマファイルは、データベースの構造を読み取り、CakePHPのスキーマファイルとして出力できます。') ?></p>
<p><?php echo __d('baser_core', 'コアパッケージやプラグインの新規テーブル作成、テーブル構造変更の際に利用すると便利です。') ?></p>
<p><?php echo __d('baser_core', '新規インストール時に利用するファイルは、次のフォルダ内に配置します。') ?></p>
<ul>
  <li><?php echo __d('baser_core', 'baserCMSコア・・・/lib/Baser/Config/Schema/') ?></li>
  <li><?php echo __d('baser_core', 'プラグイン・・・/{プラグインフォルダ}/Config/Schema/') ?></li>
</ul>

<p><?php echo __d('baser_core', 'アップデート時に利用するファイルは、次のフォルダ内に配置します。') ?></p>
<ul>
  <li><?php echo __d('baser_core', 'baserCMSコア・・・/lib/Baser/Config/update/{バージョン番号}/') ?></li>
  <li><?php echo __d('baser_core', 'プラグイン・・・/{プラグインフォルダ}/config/update/{バージョン番号}/') ?></li>
</ul>
