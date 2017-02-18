<?php
namespace Junkdude;
use pocketmine\block\Block;
use pocketmine\event\player\{
    PlayerGameModeChangeEvent, PlayerChatEvent, PlayerCommandPreprocessEvent, PlayerDeathEvent, PlayerHungerChangeEvent, PlayerInteractEvent, PlayerItemConsumeEvent, PlayerItemHeldEvent, PlayerLoginEvent, PlayerQuitEvent, PlayerDropItemEvent, PlayerJoinEvent
};
use pocketmine\event\entity\{
    EntityArmorChangeEvent, EntityDamageByEntityEvent, EntityDamageEvent, EntityTeleportEvent, EntityExplodeEvent, ExplosionPrimeEvent, EntitySpawnEvent, EntityRegainHealthEvent
};
use pocketmine\level\particle\{
    AngryVillagerParticle, BubbleParticle, CriticalParticle, DustParticle, EnchantParticle, EnchantmentTableParticle, ExplodeParticle, FlameParticle, FloatingTextParticle, GenericParticle, HappyVillagerParticle, HeartParticle, HugeExplodeParticle, InkParticle, InstantEnchantParticle, ItemBreakParticle, LargeExplodeParticle, LavaDripParticle, LavaParticle, MobSpawnParticle, Particle, PortalParticle, RedstoneParticle, SmokeParticle, SplashParticle, SporeParticle, TerrainParticle, WaterDripParticle, WaterParticle
};
use pocketmine\event\Listener;
use pocketmine\item\enchantment\Enchantment;
use pocketmine\item\Item;
use pocketmine\level\Position;
use pocketmine\math\Vector3;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat as TF;
use pocketmine\Server;
use pocketmine\nbt\NBT;
use pocketmine\level\format\FullChunk;
    use pocketmine\nbt\tag\ByteTag;
    use pocketmine\nbt\tag\CompoundTag;
    use pocketmine\nbt\tag\DoubleTag;
    use pocketmine\nbt\tag\FloatTag;
    use pocketmine\nbt\tag\IntTag;
    use pocketmine\nbt\tag\ListTag;
    use pocketmine\nbt\tag\ShortTag;
    use pocketmine\nbt\tag\StringTag;
    use pocketmine\nbt\tag\IntArrayTag;
    use pocketmine\entity\Villager;
    use pocketmine\entity\Zombie;
use pocketmine\utils\Config;
use pocketmine\tile\{
    Tile, Chest, MobSpawner
};
use pocketmine\math\AxisAlignedBB;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\event\block\BlockPlaceEvent;
use pocketmine\command\{
    Command, CommandSender, ConsoleCommandSender
};
use Junkdude\Hud;
use Junkdude\CEChecker;
use pocketmine\scheduler\PluginTask;
use pocketmine\entity\{
    Creature, Effect, Entity, Human, Item as EntityItem, Living
};
use pocketmine\inventory\ShapedRecipe;
use pocketmine\inventory\BrewingRecipe;
use pocketmine\event\block\SignChangeEvent;
class Main extends PluginBase implements Listener{
}
