using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.SceneManagement;
using UnityEngine.UI;

public class PlayerHealth : MonoBehaviour {

    public float health = 1;
    public int playerLives = 3;
    private GameObject playerObject;
    public GameObject playerPrefab;
    public GameObject livesText;
    
    // Update is called once per frame
    void Update () {
        livesText.GetComponent<Text>().text = "Lives: " + playerLives;
        if (playerObject == null)
        {
            playerObject = GameObject.FindGameObjectWithTag("Player");
        }
	}

    public void RecieveDamage(float _amount)
    {
        health -= _amount;
        if (health <= 0)
        {
            Die();
        }
    }
    public void Die()
    {
        playerLives--;
        if (playerLives == 0)
        {
            SceneManager.LoadScene(0);
        }
        else
        {
            Destroy(playerObject);
            Instantiate(playerPrefab, GameObject.FindGameObjectWithTag("Respawn").transform.position, Quaternion.identity);
        }
    }
}
