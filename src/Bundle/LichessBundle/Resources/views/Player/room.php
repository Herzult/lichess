<div class="lichess_chat">
    <div class="lichess_chat_inner">
        <input title="<?php echo $view['translator']->_('Toggle the chat') ?>" class="toggle_chat" type="checkbox" checked="checked" />
        <ol class="lichess_messages">
        <?php foreach($player->getGame()->getRoom()->getMessages() as $message): ?>
            <?php if('system' === $message[0]): ?>
            <?php $message[1] = $view['translator']->_($message[1]) ?>
            <?php else: ?>
            <?php $message[1] = Bundle\LichessBundle\Helper\TextHelper::autoLink(htmlentities($message[1], ENT_COMPAT, 'UTF-8')) ?>
            <?php endif; ?>
            <li class="<?php echo $message[0] ?>"><?php echo $message[1] ?></li>
        <?php endforeach; ?>
        </ol>
        <form action="" method="post">
            <input class="lichess_say lichess_hint" value="<?php echo $view['translator']->_('Talk in chat') ?>" />
        </form>
    </div>
</div>
