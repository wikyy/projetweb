<?PHP
include "../config.php";
class ReactionC 
{
	
	function ajouterReaction($reaction)
		{
			$sql="INSERT INTO reaction (id,react,user) 
			value(:id,:react,:user)";
			$bd=config::getConnexion();
			$query=$bd->prepare($sql);
			$query->bindvalue(':id',$reaction->getId());
			$query->bindvalue(':react',$reaction->getReact());
			$query->bindvalue(':user',$reaction->getUser());
			
			$query->execute();

        }
	
}

?>