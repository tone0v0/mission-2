<?php
function overrideSecurity(): void
{
    echo "=== 金庫アクセス制御 ===\n";
    usleep(500000);

    // ==========================================
    // 【指示】担当Aも担当Bも、下の1行を自分の設定を追加せよ！
    // 担当A: 'firewall' => 'DISARMED',
    // 担当B: 'vault_door' => 'UNLOCKED',
    $system_config = [
        'OVERRIDE_TARGET' => false,
        'vault_door' => 'UNLOCKED',
        'firewall' => 'DISARMED',
    ];
    // ==========================================

    $fw = $system_config['firewall'] ?? null;
    $door = $system_config['vault_door'] ?? null;

    if ($fw === 'DISARMED' && $door === 'UNLOCKED') {
        echo "🔓 【突破成功】セキュリティ停止！金庫扉が開放されました！\n";
    } else {
        echo "🚨 【警報】設定不完全: FW={$fw}, DOOR={$door}\n";
        exit(1);
    }
}
overrideSecurity();
