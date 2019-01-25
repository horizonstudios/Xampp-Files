using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.SceneManagement;
using UnityEngine.UI;

public class ScoreScript : MonoBehaviour {

    //Floats
    public float time;
    public float score;

    //GameObjects
    public GameObject TimeUI;
    public GameObject ScoreUI;
    public GameObject WinText;
    // Update is called once per frame
    void Update () {
        time -= Time.deltaTime;
        TimeUI.gameObject.GetComponent<Text>().text = "Time: " + time;
        ScoreUI.gameObject.GetComponent<Text>().text = "Score: " + score;
        if (time <= 0)
        {
            SceneManager.LoadScene(0);
        }
	}

 

    public void EnterEnd()
    {
        int newScene = SceneManager.GetActiveScene().buildIndex + 1;
        SceneManager.LoadScene(newScene);
        //Time.timeScale = 0;
        //WinText.SetActive(true);
    }

    public void CoinScore(GameObject _go)
    {
        score += 100;
        Destroy(_go);
    }

}
